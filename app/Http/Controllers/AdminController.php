<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function idea() {
        return view('admin.idea.index');
    }

    public function innovation() {
        return view('admin.innovation.index');
    }

    public function user_management() {
        return view('admin.user-managemenet.index');
    }
}
