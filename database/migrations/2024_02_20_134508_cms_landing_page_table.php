<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cms_landing_page', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('section1_title');
            $table->text('section1_content');
            $table->text('section2_title');
            $table->text('section2_subtitle1');
            $table->text('section2_subtitle1_content');
            $table->text('section2_subtitle2');
            $table->text('section2_subtitle2_content');
            $table->text('section2_subtitle3');
            $table->text('section2_subtitle3_content');
            $table->text('section2_subtitle4');
            $table->text('section2_subtitle4_content');
            $table->text('section3_title');
            $table->text('section3_subtitle1');
            $table->text('section3_subtitle1_content');
            $table->text('section3_subtitle2');
            $table->text('section3_subtitle2_content');
            $table->text('section3_subtitle3');
            $table->text('section3_subtitle3_content');
            $table->text('section3_subtitle4');
            $table->text('section3_subtitle4_content');
            $table->text('section3_subtitle5');
            $table->text('section3_subtitle5_content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_landing_page');
    }
};
