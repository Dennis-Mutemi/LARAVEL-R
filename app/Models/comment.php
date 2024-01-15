<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $casts=[
        'body'=>'array',
    ];
    protected function post(){
        return $this->belongsTo(post::class,'post_id');
    }
    protected function user(){
        return $this->belongsTo(user::class,'user_id');
    }
}
