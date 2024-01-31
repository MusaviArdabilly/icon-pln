<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Idea;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';
    
    protected $fillable = [
        'user_id',
        'idea_id',
        'parent_id',
        'content',
    ];

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function idea():BelongsTo {
        return $this->belongsTo(Idea::class);
    }
}
