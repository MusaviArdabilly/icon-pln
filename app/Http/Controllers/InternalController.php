<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Idea;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;

class InternalController extends Controller
{
    public function idea() {
        $idea = Idea::where('status', 'ide')->orderBy('created_at', 'desc')->get();

        return view('internal.idea.index', compact('idea'));
    }

    public function idea_v2() {
        $idea = Idea::where('status', 'ide')->orderBy('created_at', 'desc')->get();

        return view('internal.idea.index_v2', compact('idea'));
    }

    public function idea_submit(Request $request) {
        $attachments = [];
        
        $idea =  new Idea;
        if($request->hasFile('thumbnail')){
            $thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
            $idea->thumbnail = $thumbnail;
        }else{
            $idea->thumbnail = 'thumbnails/default-tumbnail-idea.png';
        }
        $idea->title = $request->title;
        // $idea->abstract = $request->abstract;
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
        // dump($comments->toArray());

        return view('internal.idea.detail', compact('idea', 'comments'));
    }
    
    public function innovation() {
        $innovation = Idea::where('status', 'inovasi')->get();

        return view('internal.innovation.index', compact('innovation'));
    }

    public function detail_innovation($id) {
        $innovation = Idea::find($id);
        $comments = Comment::where('idea_id', $id)->orderBy('created_at', 'desc')->get();

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
        // dd($filename);
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

        return redirect()->back();
    }
}
