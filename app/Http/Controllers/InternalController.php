<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Idea;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Pagination\Paginator;

class InternalController extends Controller
{
    public function idea() {
        $idea = Idea::where('status', 'ide')->orderBy('created_at', 'desc')->get();

        return view('internal.idea.index', compact('idea'));
    }

    public function idea_v2() {
        $idea = Idea::select('*', DB::raw('(total_views + (2 * total_comments)) as popularity'))
                ->where('status', 'ide')
                ->orderBy('created_at', 'desc')
                ->simplePaginate(8);
                // dd($idea);

        return view('internal.idea.index_v2', compact('idea'));
    }

    // old v3 
    public function idea_v3(Request $request): View {
        $idea = Idea::select('*', DB::raw('(total_views + (2 * total_comments)) as popularity'))
                ->where('status', 'ide')
                ->orderBy('created_at', 'desc')
                ->simplePaginate(8);
        
        if($request->ajax()){
            return view('internal.idea.card_idea', compact('idea'));
        }

        return view('internal.idea.index_v3', compact('idea'));
    }

    // public function idea_v3(Request $request): View {
    //     $perPage = 8;
    //     $currentPage = $request->input('page', 1);
    
    //     $totalItems = Idea::where('status', 'ide')->count();
    
    //     $ideas = Idea::select('*', DB::raw('(total_views + (2 * total_comments)) as popularity'))
    //             ->where('status', 'ide')
    //             ->orderBy('created_at', 'desc')
    //             ->get();
    
    //     // Manually paginate the ideas
    //     $paginator = new Paginator($ideas, $perPage, $currentPage);
    //     $idea = $paginator->items();
    
    //     if ($request->ajax()) {
    //         return view('internal.idea.card_idea', compact('idea'));
    //     }
    
    //     $totalPages = ceil($totalItems / $perPage);
    //     $disablePrev = ($currentPage == 1) ? true : false;
    //     $disableNext = ($currentPage == $totalPages || $totalPages == 0) ? true : false;
    
    //     return view('internal.idea.index_v3', compact('idea', 'totalPages', 'currentPage', 'disablePrev', 'disableNext'));
    // }

    public function get_idea(Request $request) {
        $page = $request->input('page', 1);
        $perPage = 8;

        $idea = Idea::select('*', DB::raw('(total_views + (2 * total_comments)) as popularity'))
            ->where('status', 'ide')
            ->orderBy('created_at', 'desc')
            ->offset(($page - 1) * $perPage)
            ->limit($perPage)
            ->get();

        $lastPage = Idea::where('status', 'ide')->count() / $perPage;

        return response()->json([
            'ideas' => view('internal.idea.ideas', compact('idea'))->render(),
            'lastPage' => ceil($lastPage),
        ]);
    }

    public function idea_submit(Request $request) {
        $attachments = [];
        
        $idea =  new Idea;
        $idea->user_id = Auth::user()->id;
        if($request->hasFile('thumbnail')){
            $thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
            $idea->thumbnail = $thumbnail;
        }else{
            $idea->thumbnail = 'thumbnails/default-tumbnail-idea.png';
        }
        $idea->title = $request->title;
        $idea->background = $request->background;
        $idea->content = $request->content;
        $idea->solution = $request->solution;
        $idea->team = $request->team;
        $idea->status = 'Ide';
        if ($request->hasFile('attachment')) {
            foreach ($request->file('attachment') as $attachment) {
                $attachment_file_name = $attachment->getClientOriginalName();
                $path = $attachment->storeAs('attachments', $attachment_file_name, 'public');
                $attachments[] = $path;
            }
            $idea->attachment =  $attachments;
        }
        $idea->save();
    }

    public function detail_idea($id) {
        $idea = Idea::find($id);
        $comment = [];
        $comments = Comment::where('idea_id', $id)->orderBy('created_at', 'desc')->get();
        
        if(Auth::user()->role == 'user'){
            $userId = auth()->id();
            $now = Carbon::now();
            $midnight = Carbon::today();
            
            $lastView = $idea->view()->where('user_id', $userId)->where('created_at', '>=', $midnight)->latest()->first();

            if(!$lastView) {
                $idea->incrementViews();
                $idea->view()->create(['user_id' => $userId]);
            }
        }

        return view('internal.idea.detail', compact('idea', 'comments'));
    }
    
    public function innovation() {
        $innovation = Idea::where('status', 'inovasi')->get();

        return view('internal.innovation.index', compact('innovation'));
    }

    public function detail_innovation($id) {
        $innovation = Idea::find($id);
        $comments = Comment::where('idea_id', $id)->orderBy('created_at', 'desc')->get();
        
        if(Auth::user()->role == 'user'){
            $userId = auth()->id();
            $now = Carbon::now();
            $midnight = Carbon::today();

            $lastView = $innovation->view()->where('user_id', $userId)->where('created_at', '>=', $midnight)->latest()->first();

            if(!$lastView) {
                $innovation->incrementViews();
                $innovation->view()->create(['user_id' => $userId]);
            }
        }

        return view('internal.innovation.detail', compact('innovation', 'comments'));
    }

    public function repository() {
        return view('internal.repository.index');
    }

    public function repository_v2() {
        return view('internal.repository.index-v2');
    }
    
    public function download_attachment($filename)
    {
        $path = public_path("storage/attachments/{$filename}");

        if (!Storage::disk('public')->exists("attachments/{$filename}")) {
            abort(404);
        }

        return response()->download($path, $filename);
    }

    public function comment_post($id, Request $request) {
        $user_id = Auth::user()->id;
        $idea_id = $id;

        if($request->parent_id){ // reply
            $user_id = $request->user_id;
            $idea_id = $request->idea_id;
        }
        
        $comment = new Comment;
        $comment->user_id = $user_id;
        $comment->idea_id = $idea_id;
        $comment->parent_id = $request->parent_id;
        $comment->content = $request->content;
        $comment->save();
        
        $idea = Idea::find($id);
        $idea->incrementComments();

        return redirect()->back();
    }
}
