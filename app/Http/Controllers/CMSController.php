<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CmsLandingPage;
use App\Models\FlowPosition;

class CMSController extends Controller
{
    public function cms_landing_page() {
        $data = CmsLandingPage::where('id', 1)->first();
        $flow_position = FlowPosition::all();
        // dd($data, $flow_position);
        return view('admin.cms.landing-page', compact('data', 'flow_position'));
    }

    public function cms_landing_page_edit(Request $request) {
        $landing_page_content = CmsLandingPage::find(1);
        $section3_subtitle1 = FlowPosition::find(1);
        $section3_subtitle2 = FlowPosition::find(2);
        $section3_subtitle3 = FlowPosition::find(3);
        $section3_subtitle4 = FlowPosition::find(4);
        $section3_subtitle5 = FlowPosition::find(5);

        $landing_page_content->section1_title = $request->section1_title;
        $landing_page_content->section1_content = $request->section1_content;
        $landing_page_content->section2_title = $request->section2_title;
        $landing_page_content->section2_subtitle1 = $request->section2_subtitle1;
        $landing_page_content->section2_subtitle1_content = $request->section2_subtitle1_content;
        $landing_page_content->section2_subtitle2 = $request->section2_subtitle2;
        $landing_page_content->section2_subtitle2_content = $request->section2_subtitle2_content;
        $landing_page_content->section2_subtitle3 = $request->section2_subtitle3;
        $landing_page_content->section2_subtitle3_content = $request->section2_subtitle3_content;
        $landing_page_content->section2_subtitle4 = $request->section2_subtitle4;
        $landing_page_content->section2_subtitle4_content = $request->section2_subtitle4_content;
        $landing_page_content->section3_title = $request->section3_title;
        $section3_subtitle1->name = $request->section3_subtitle1;
        $landing_page_content->section3_subtitle1_content = $request->section3_subtitle1_content;
        $section3_subtitle2->name = $request->section3_subtitle2;
        $landing_page_content->section3_subtitle2_content = $request->section3_subtitle2_content;
        $section3_subtitle3->name = $request->section3_subtitle3;
        $landing_page_content->section3_subtitle3_content = $request->section3_subtitle3_content;
        $section3_subtitle4->name = $request->section3_subtitle4;
        $landing_page_content->section3_subtitle4_content = $request->section3_subtitle4_content;
        $section3_subtitle5->name = $request->section3_subtitle5;
        $landing_page_content->section3_subtitle5_content = $request->section3_subtitle5_content;

        $landing_page_content->save();
        $section3_subtitle1->save();
        $section3_subtitle2->save();
        $section3_subtitle3->save();
        $section3_subtitle4->save();
        $section3_subtitle5->save();

        return redirect('/admin/cms/landing-page')->with('success', 'Landing Page berhasil diperbaruhi');;
    }
}
