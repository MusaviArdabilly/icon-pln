<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;

class AdminController extends Controller
{
    public function idea() {
        $idea = Idea::where('status', 'ide')->get();
        
        return view('admin.idea.index', compact('idea'));
    }

    public function detail_idea($id) {
        $idea = Idea::find($id);
        
        return view('admin.idea.detail', compact('idea'));
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
        
        return view('admin.innovation.detail', compact('innovation'));
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
        return view('admin.user-managemenet.index');
    }
}
