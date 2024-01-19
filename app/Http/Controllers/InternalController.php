<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        return view('internal.idea.index');
    }

    public function detail_idea() {
        return view('internal.idea.detail');
    }
    
    public function innovation() {
        return view('internal.innovation.index');
    }

    public function detail_innovation() {
        return view('internal.innovation.detail');
    }

    public function repository() {
        return view('internal.repository.index');
    }
}
