<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsLandingPage extends Model
{
    use HasFactory;

    protected $table = 'cms_landing_page';

    protected $fillable = [
        'section1_title',
        'section1_content',
        'section2_title',
        'section2_subtitle1',
        'section2_subtitle1_content',
        'section2_subtitle2',
        'section2_subtitle2_content',
        'section2_subtitle3',
        'section2_subtitle3_content',
        'section2_subtitle4',
        'section2_subtitle4_content',
        'section3_title',
        'section3_subtitle1',
        'section3_subtitle1_content',
        'section3_subtitle2',
        'section3_subtitle2_content',
        'section3_subtitle3',
        'section3_subtitle3_content',
        'section3_subtitle4',
        'section3_subtitle4_content',
        'section3_subtitle5',
        'section3_subtitle5_content',
    ];
}
