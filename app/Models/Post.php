<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   

    protected $fillable = [
        'id', 'user', 'topics_id', 'mensaje', 'created_at', 'update_at'
    ];

    
    protected $hidden = [
        
    ];
}