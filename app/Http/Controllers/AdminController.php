<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;

class AdminController extends Controller
{
    public function idea() {
        $idea = Idea::where('status', 'ide')->get();
        
        return view('admin.idea.index', compact('idea'));
    }

    public function detail_idea($id) {
        $idea = Idea::find($id);
        $comments = Comment::where('idea_id', $id)->orderBy('created_at', 'desc')->get();
        
        return view('admin.idea.detail', compact('idea', 'comments'));
    }

    public function idea_to_innovation($id) {
        $idea = Idea::find($id);
        $idea->status = 'inovasi';
        $idea->save();
        
        return redirect('/admin/idea');
    }

    public function delete_idea($id) {
        $idea = Idea::find($id);
        $idea->delete();
        
        return redirect('/admin/idea');
    }

    public function innovation() {
        $innovation = Idea::where('status', 'inovasi')->get();
        
        return view('admin.innovation.index', compact('innovation'));
    }

    public function detail_innovation($id) {
        $innovation = Idea::find($id);
        $comments = Comment::where('idea_id', $id)->orderBy('created_at', 'desc')->get();
        
        return view('admin.innovation.detail', compact('innovation', 'comments'));
    }

    public function innovation_to_idea($id) {
        $innovation = Idea::find($id);
        $innovation->status = 'ide';
        $innovation->save();
        
        return redirect('/admin/innovation');
    }

    public function delete_innovation($id) {
        $innovation = Idea::find($id);
        $innovation->delete();
        
        return redirect('/admin/innovation');
    }

    public function user_management() {
        return view('admin.user-management.index');
    }

    public function get_data_user_management() {
        $users = User::where('role', 'user')->get();
        $admins = User::where('role', 'admin')->get();

        return response()->json([
            'users' => $users,
            'admins' => $admins ]);
    }

    public function make_admin($id) {
        $user = User::findOrFail($id);
        $user->role = 'admin';
        $user->save();
    }

    public function make_user($id) {
        $user = User::findOrFail($id);
        if($user->role != 'super_admin'){
            $user->role = 'user';
            $user->save();
        } else {
            abort(403, 'Anda tidak bisa mengubah role super admin');
        }
    }

    public function comment_delete($ideaId, $commentId) {
        $comment = Comment::find($commentId);
        $replies = Comment::where('parent_id', $comment->id);
        
        $replies->delete();
        $comment->delete();

        $idea = Idea::find($ideaId);
        $idea->total_comments = $idea->comment()->count();
        $idea->save();
        
        return redirect()->back();
    }
}
