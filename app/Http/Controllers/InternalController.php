<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Idea;

class InternalController extends Controller
{
    public function ideaSubmit(Request $request) {
        $validator = Validator::make($request->all(), [
            'banner'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required',
            'abstract'   => 'required',
            'background' => 'required',
            'content' => 'required',
            'solution' => 'required',
            'team' => 'required',
            'attachment' => 'required',
        ]);

        // $post = new Post;
        // $post->title = $request->title;

        // if ($request->hasFile('images')) {
        //     $images = [];
        //     foreach ($request->file('images') as $file) {
        //         $filename = time() . '_' . $file->getClientOriginalName();
        //         $file->storeAs('public/images', $filename);
        //         $images[] = $filename;
        //     }
        //     // $post->images = implode(',', $images);
        // }

        // $post->save();
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        } else {
            return response()->json(
                ['message' => 'Post created successfully',
                "data" => $request->all()
            ]);
        }

    }
    public function idea() {
        $idea = Idea::where('status', 'ide')->get();

        return view('internal.idea.index', compact('idea'));
    }

    public function detail_idea($id) {
        $idea = Idea::find($id);

        return view('internal.idea.detail', compact('idea'));
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
