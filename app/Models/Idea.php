<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $table = 'idea';
    protected $fillable = [
        'tumbnail',
        'title',
        'abstract',
        'background',
        'content',
        'solution',
        'team'
    ];
}
