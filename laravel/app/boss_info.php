<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boss_info extends Model
{
    protected $fillable = [
        'name', 'level', 'lifepoints', 'aggressive', 'poisonous', 'weakness',
    ];
}
