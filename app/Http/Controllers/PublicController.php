<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CmsLandingPage;

class PublicController extends Controller
{
    public function index() {
        return view('public.landing-page');
    }
    
    public function index_v2() {
        return view('public.landing-page-v2');
    }

    public function index_v3() {
        return view('public.landing-page-v3');
    }

    public function index_v4() {
        $data = CmsLandingPage::where('id', 1)->first();

        return view('public.landing-page-v4', compact('data'));
    }
}
