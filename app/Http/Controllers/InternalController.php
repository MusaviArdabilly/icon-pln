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
use Illuminate\Support\Facades\App;
use ZipArchive;
use Illuminate\Support\Facades\File;

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
    // v3 
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

    public function idea_v4(Request $request){
        return view('internal.idea.index_v4');
    }

    public function get_idea(Request $request) {
        $perPage = 8; 
        $page = $request->input('page', 1); // Current page

        $idea = Idea::where('status', 'ide') 
                    ->orderByDesc('created_at') 
                    ->skip(($page - 1) * $perPage)
                    ->take($perPage)
                    ->get();

        // Calculate popularity using the given formula
        $idea = $idea->map(function ($item) {
            $item->popularity = $item->total_views + (2 * $item->total_comments);
            return $item;
        });

        $totalIdea = Idea::where('status', 'ide')->count();
        $lastPage = ceil($totalIdea / $perPage);

        return response()->json([
            'ideas' => view('internal.idea.card_idea', compact('idea'))->render(),
            'lastPage' => ceil($lastPage),
            'totalIdea' => $totalIdea
        ]);
    }

    public function get_popular_idea(Request $request):View {
        $idea = Idea::where('status', 'ide')
                    ->where(DB::raw('total_views + (2 * total_comments)'), '>', 0)
                    ->orderByDesc(DB::raw('total_views + (2 * total_comments)'))
                    ->take(8)
                    ->get();

        return view('internal.idea.card_idea', compact('idea'));
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
        $idea->status = 'ide';
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

    public function idea_edit(Request $request, $id) {
        $attachments = [];
        
        $idea =  Idea::find($id);
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
        return view('internal.innovation.index');
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

    public function get_innovation(Request $request) {
        $perPage = 8; 
        $page = $request->input('page', 1); // Current page

        $innovation = Idea::where('status', 'inovasi') 
                    ->orderByDesc('created_at') 
                    ->skip(($page - 1) * $perPage)
                    ->take($perPage)
                    ->get();

        // Calculate popularity using the given formula
        $innovation = $innovation->map(function ($item) {
            $item->popularity = $item->total_views + (2 * $item->total_comments);
            return $item;
        });

        $totalInnovation = Idea::where('status', 'inovasi')->count();
        $lastPage = ceil($totalInnovation / $perPage);

        return response()->json([
            'ideas' => view('internal.innovation.card_innovation', compact('innovation'))->render(),
            'lastPage' => ceil($lastPage),
            'totalInnovation' => $totalInnovation
        ]);
    }

    public function get_popular_innovation(Request $request):View {
        $innovation = Idea::where('status', 'inovasi')
                    ->where(DB::raw('total_views + (2 * total_comments)'), '>', 0)
                    ->orderByDesc(DB::raw('total_views + (2 * total_comments)'))
                    ->take(8)
                    ->get();

        return view('internal.innovation.card_innovation', compact('innovation'));
    }

    public function repository() {
        return view('internal.repository.index');
    }

    public function repository_v2() {
        $repository = Idea::where('status', 'inovasi')
                            ->orderBy('created_at', 'desc')
                            ->get();

        $repositoryByYears = $repository->groupBy(function ($date) {
            return Carbon::parse($date->created_at)->format('Y');
        })->map(function ($yearGroup) {
            return $yearGroup->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->locale('id')->format('F');
            });
        });
        
        $currentYear = now()->year;
        $currentMonth = now()->month;

        // dd('response', json_decode($repository), json_decode($repositoryByYears));
                            
        return view('internal.repository.index-v2', compact('repositoryByYears', 'currentYear', 'currentMonth'));
    }

    public function get_detail_repository($year, $month) {
        // Convert month name to numeric representation
        $monthNumeric = Carbon::parse("1 {$month}")->month;

        $repository = Idea::whereYear('created_at', $year)
                            ->whereMonth('created_at', $monthNumeric)
                            ->where('status', 'inovasi')
                            ->get();

        // return response()->json($repository);
        return view('internal.repository.card-swiper-slide', compact('repository'));
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

    //owner:user

    public function idea_user() {
        $idea = Idea::where('status', 'ide')
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('created_at', 'desc')->get();

        return view('internal.dashboard.idea', compact('idea'));
    }

    public function detail_idea_user($id) {
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

        return view('internal.dashboard.detail_idea', compact('idea', 'comments'));
    }


    public function innovation_user() {
        $idea = Idea::where('status', 'inovasi')
                    ->where('user_id', Auth::user()->id)
                    ->orderBy('created_at', 'desc')->get();

        return view('internal.dashboard.innovation', compact('idea'));
    }

    public function detail_innovation_user($id) {
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

        return view('internal.dashboard.detail_innovation', compact('idea', 'comments'));
    }

    public function download_archive($id) {
        $name = str_replace(' ', '_', Auth::user()->name);
        $repository = Idea::findOrFail($id);

        $tempDir = storage_path('app/public/temp_zip/temp_zip_' . time());
        File::makeDirectory($tempDir);

        $zip = new ZipArchive;
        $zipFileName = 'attachments_' . $id . '_' . $name . '.zip';
        $zipFilePath = $tempDir . '/' . $zipFileName;

        $zip->open($zipFilePath, ZipArchive::CREATE);
            foreach ($repository->attachment as $attachment) {
                $attachmentPath = storage_path("app/public/{$attachment}");
                $zip->addFile($attachmentPath, $attachment);
            }
            $zip->close();
        

        $headers = [
            'Content-Type' => 'application/zip',
            'Content-Disposition' => 'attachment; filename="' . $zipFileName . '"',
        ];

        $response = response()->download($zipFilePath, $zipFileName, $headers);
    
        $response->deleteFileAfterSend(true);

        return $response;
    }


}