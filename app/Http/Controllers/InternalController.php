<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Idea;

class InternalController extends Controller
{
    public function idea() {
        $idea = Idea::where('status', 'ide')->get();

        return view('internal.idea.index', compact('idea'));
    }

    public function detail_idea($id) {
        $idea = Idea::find($id);

        return view('internal.idea.detail', compact('idea'));
    }

    public function idea_submit(Request $request) {
        $clean_title = strip_tags($request->title);
        $tumbnail_name = 'Tumbnail - ' . Auth::user()->name . ' ' . $clean_title;
        
        $idea =  new Idea;
        $idea->tumbnail = $tumbnail_name;
        $idea->title = $request->title;
        $idea->abstract = $request->abstract;
        $idea->background = $request->background;
        $idea->content = $request->content;
        $idea->solution = $request->solution;
        $idea->team = $request->team;
        $idea->status = 'Ide';
        $idea->attachment = $request->attachment;
        $idea->save();
    }
    
    public function innovation() {
        $innovation = Idea::where('status', 'inovasi')->get();

        return view('internal.innovation.index', compact('innovation'));
    }

    public function detail_innovation($id) {
        $innovation = Idea::find($id);

        return view('internal.innovation.detail', compact('innovation'));
    }

    public function repository() {
        return view('internal.repository.index');
    }

    public function repository_v2() {
        return view('internal.repository.index-v2');
    }
}
