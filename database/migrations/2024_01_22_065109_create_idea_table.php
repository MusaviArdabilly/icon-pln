<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('idea', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('thumbnail');
            $table->string('title');
            // $table->text('abstract');
            $table->text('background')->nullable();
            $table->text('content')->nullable();
            $table->text('solution')->nullable();
            $table->string('team');
            $table->string('status');
            $table->json('attachment')->default(new Expression('(JSON_ARRAY())'));
            $table->unsignedBigInteger('total_views')->default(0);
            $table->unsignedBigInteger('total_comments')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idea');
    }
};
