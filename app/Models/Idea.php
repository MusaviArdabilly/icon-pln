<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\IdeaView;
use App\Models\Comment;
use App\Models\User;
use App\Models\FlowPosition;

class Idea extends Model
{
    use HasFactory;

    protected $table = 'idea';
    
    protected $fillable = [
        'user_id',
        'thumbnail',
        'title',
        'background',
        'purpose',
        'solution',
        'evaluation',
        'result',
        'team',
        'status',
        'attachment',
        'attachment_flow_position_2',
        'attachment_flow_position_3',
        'flow_position',
        'total_views',
        'total_comments'
    ];
    
    protected $casts = [
        'attachment' => 'json',
        'attachment_flow_position_2' => 'json',
        'attachment_flow_position_3' => 'json',
    ];

    public function comment():HasMany {
        return $this->hasMany(Comment::class);
    }

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function get_flow_position():BelongsTo {
        return $this->belongsTo(FlowPosition::class, 'flow_position');
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
