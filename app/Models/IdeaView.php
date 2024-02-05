<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Idea;
use App\Models\User;

class IdeaView extends Model
{
    use HasFactory;

    protected $table = 'idea_view';

    protected $fillable = [
        'idea_id',
        'user_id',
    ];

    public function idea():BelongsTo {
        return $this->belongsTo(Idea::class);
    }

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }
}
