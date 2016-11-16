<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class player_data extends Model
{
    protected $fillable = [
        'user_id', 'xp', 'status', 'created_at', 'updated_at', 'username'
    ];
}
