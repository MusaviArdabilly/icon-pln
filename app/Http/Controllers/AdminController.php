<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use App\Models\FlowPosition;
use App\Models\Notification;
use Hashids\Hashids;

class AdminController extends Controller
{
    public function idea() {
        $idea = Idea::where('status', 'ide')
                    ->orderBy('created_at', 'desc')
                    ->get();
        $idea = $idea->map(function ($item){
            $hashids = new Hashids('', 10);
            $item->encryptedId = $hashids->encode($item->id);
            return $item;
        });
        
        return view('admin.idea.index', compact('idea'));
    }

    public function detail_idea($id) {
        $idea = Idea::where('id', $id)->firstOrFail();
        $comments = Comment::where('idea_id', $id)->orderBy('created_at', 'desc')->get();
        
        return view('admin.idea.detail', compact('idea', 'comments'));
    }

    public function idea_to_innovation($id) {
        $idea = Idea::where('id', $id)->firstOrFail();
        $idea->status = 'inovasi';
        $idea->flow_position = 2;
        $idea->save();
        
        return redirect('/admin/idea');
    }

    public function delete_idea(Request $request, $id) {
        $this->validate($request, [
            'captcha' => 'required|captcha'
        ],[
            'captcha.required' => 'Harap mengisi captcha',
            'captcha.captcha' => 'Captcha Salah'
        ]);
        
        $idea = Idea::where('id', $id)->firstOrFail();
        $idea->delete();
        
        return redirect('/admin/idea');
    }

    public function innovation() {
        $flow_position = FlowPosition::all();
        $innovation = Idea::where('status', 'inovasi')
                            ->orderBy('created_at', 'desc')
                            ->get();
        $innovation = $innovation->map(function ($item){
            $hashids = new Hashids('', 10);
            $item->encryptedId = $hashids->encode($item->id);
            return $item;
        });
        
        return view('admin.innovation.index', compact('innovation', 'flow_position'));
    }

    public function detail_innovation($id) {
        $flow_position = FlowPosition::all();
        $innovation = Idea::where('id', $id)->firstOrFail();
        $hashids = new Hashids('', 10);
        $innovation->encryptedId = $hashids->encode($innovation->id);
        $comments = Comment::where('idea_id', $id)->orderBy('created_at', 'desc')->get();
        
        return view('admin.innovation.detail', compact('innovation', 'comments', 'flow_position'));
    }

    public function innovation_to_idea($id) {
        $innovation = Idea::where('id', $id)->firstOrFail();
        $innovation->status = 'ide';
        $innovation->evaluation = '';
        $innovation->result = '';
        $innovation->flow_position = 1;
        $innovation->save();
        
        return redirect('/admin/innovation');
    }

    public function delete_innovation(Request $request, $id) {
        $this->validate($request, [
            'captcha' => 'required|captcha'
        ]);

        $innovation = Idea::where('id', $id)->firstOrFail();
        $innovation->delete();
        
        return redirect('/admin/innovation');
    }

    public function user_management() {
        return view('admin.user-management.index');
    }

    public function get_data_user_management() {
        $users = User::where('role', 'user')->orderBy('created_at', 'desc')->get();
        $users = $users->map(function ($item){
            $hashids = new Hashids('', 10);
            $item->encryptedId = $hashids->encode($item->id);
            return $item;
        });
        $admins = User::where('role', 'admin')->orderBy('created_at', 'desc')->get();
        $admins = $admins->map(function ($item){
            $hashids = new Hashids('', 10);
            $item->encryptedId = $hashids->encode($item->id);
            return $item;
        });

        return response()->json([
            'users' => $users,
            'admins' => $admins 
        ]);
    }

    public function make_admin($id) {
        $user = User::where('id', $id)->firstOrFail();
        $user->role = 'admin';
        $user->save();
    }

    public function make_user($id) {
        $user = User::where('id', $id)->firstOrFail();
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

    public function repository() {
        return view('admin.repository.index');
    }

    public function get_data_repository() {
        $repository = Idea::where('status', 'inovasi')
                            ->orderBy('created_at', 'desc')->get();

        return response()->json($repository);
    }

    public function add_data_repository(Request $request) {
        $attachments = [];
        $repository = new Idea;
        $repository->user_id = Auth::user()->id;
        $repository->thumbnail = 'thumbnails/default-tumbnail-idea.png';
        $repository->title = $request->title;
        $repository->team = $request->team;
        $repository->status = 'inovasi';
        if($request->hasFile('attachment')){
            foreach ($request->file('attachment') as $attachment) {
                $attachment_file_name = $attachment->getClientOriginalName();
                $path = $attachment->storeAs('attachments', $attachment_file_name, 'public');
                $attachments[] = $path;
            }
            $repository->attachment = $attachments;
        }
        $repository->save();

        return redirect('/admin/repository');
    }

    public function delete_data_repository($id) {
        $repository = Idea::findOrFail($id);

        foreach ($repository->attachment as $attachment) {
            if ($attachment !== 'attachments/attachment-icon.png') {
                $attachmentPath = storage_path("app/public/$attachment");
                if (file_exists($attachmentPath)) {
                    unlink($attachmentPath);
                }
            }
        }
        if ($repository->thumbnail !== 'thumbnails/default-tumbnail-idea.png') {
            $thumbnailPath = storage_path("app/public/{$repository->thumbnail}");
            if (file_exists($thumbnailPath)) {
                unlink($thumbnailPath);
            }
        }

        $repository->delete();
    }

    public function approve_step_2($id){
        $innovation = Idea::where('id', $id)->firstOrFail();
        $flow_position_name = $innovation->get_flow_position->name;
        if($innovation->status == 'inovasi' && $innovation->flow_position == 2){
            $innovation->flow_position = 3;
        }
        $innovation->save();

        $notification = new Notification;
        $notification->user_id = $innovation->user_id;
        $notification->message = '<strong>' . $flow_position_name . '</strong>' . ' Anda pada judul ' . '"' . strip_tags($innovation->title) . '"' . ' <strong>telah Disetujui</strong>';
        $notification->is_read = false;
        $notification->save();

        return redirect('/admin/innovation');
    }

    public function approve_step_3($id){
        $innovation = Idea::where('id', $id)->firstOrFail();
        $flow_position_name = $innovation->get_flow_position->name;
        if($innovation->status == 'inovasi' && $innovation->flow_position == 3){
            $innovation->flow_position = 4;
        }
        $innovation->save();

        $notification = new Notification;
        $notification->user_id = $innovation->user_id;
        $notification->message = '<strong>' . $flow_position_name . '</strong>' . ' Anda pada judul ' . '"' . strip_tags($innovation->title) . '"' . ' <strong>telah Disetujui</strong>';
        $notification->is_read = false;
        $notification->save();

        return redirect('/admin/innovation');
    }

    public function approve_step_4($id){
        $innovation = Idea::where('id', $id)->firstOrFail();
        $flow_position_name = $innovation->get_flow_position->name;
        if($innovation->status == 'inovasi' && $innovation->flow_position == 4){
            $innovation->flow_position = 5;
        }
        $innovation->save();

        $notification = new Notification;
        $notification->user_id = $innovation->user_id;
        $notification->message = '<strong>' . $flow_position_name . '</strong>' . ' Anda pada judul ' . '"' . strip_tags($innovation->title) . '"' . ' <strong>telah Disetujui</strong>';
        $notification->is_read = false;
        $notification->save();

        return redirect('/admin/innovation');
    }

    public function step_4_post(Request $request, $id){
        $this->validate($request, [
            'evaluation' => 'required'
        ], [
            'evaluation.required' => 'Tidak boleh kosong'
        ]);

        $innovation = Idea::where('id', $id)
                            ->where('status', 'inovasi')
                            ->firstOrFail();

        $flow_position_name = $innovation->get_flow_position->name;

        $innovation->evaluation = $request->evaluation;
        $innovation->save();

        $notification = new Notification;
        $notification->user_id = $innovation->user_id;
        $notification->message = '<strong>' . $flow_position_name . '</strong>' . ' Anda pada judul ' . '"' . strip_tags($innovation->title) . '"' . ' <strong>telah Dievaluasi</strong>';
        $notification->is_read = false;
        $notification->save();

        return redirect()->back();
    }

    public function step_5_post(Request $request, $id){
        $this->validate($request, [
            'result' => 'required'
        ], [
            'result.required' => 'Tidak boleh kosong'
        ]);
        
        $innovation = Idea::where('id', $id)
                            ->where('status', 'inovasi')
                            ->firstOrFail();

        $flow_position_name = $innovation->get_flow_position->name;

        $innovation->result = $request->result;
        $innovation->save();

        $notification = new Notification;
        $notification->user_id = $innovation->user_id;
        $notification->message = '<strong>' . $flow_position_name . '</strong>' . ' Anda pada judul ' . '"' . strip_tags($innovation->title) . '"' . ' <strong>telah Dinilai</strong>';
        $notification->is_read = false;
        $notification->save();

        return redirect()->back();
    }
}
