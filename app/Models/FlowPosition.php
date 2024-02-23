<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlowPosition extends Model
{
    use HasFactory;

    protected $table = 'flow_position';
    protected $fillable = [
        'name'
    ];
}
