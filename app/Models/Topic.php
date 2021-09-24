<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{   

    protected $fillable = [
        'id', 'tema',
    ];

    
    protected $hidden = [
        'created_at', 'update_at'
    ];
}