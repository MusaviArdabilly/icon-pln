<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternalController extends Controller
{
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

    public function repository_v2() {
        return view('internal.repository.index-v2');
    }
}
