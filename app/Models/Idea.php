<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\IdeaView;
use App\Models\Comment;

class Idea extends Model
{
    use HasFactory;

    protected $table = 'idea';
    
    protected $fillable = [
        'thumbnail',
        'title',
        'background',
        'content',
        'solution',
        'team',
        'status',
        'total_views',
        'total_comments'
    ];
    
    protected $casts = [
        'attachment' => 'json',
    ];

    public function comment():HasMany {
        return $this->hasMany(Comment::class);
    }

    public function view():HasMany {
        return $this->hasMany(IdeaView::class);
    }

    public function incrementViews() {
        return $this->increment('total_views');
    }

    public function incrementComments() {
        return $this->increment('total_comments');
    }
}
