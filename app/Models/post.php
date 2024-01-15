<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $casts=[
        'body'=>'array',
    ];
    //one to many relationship
    protected function comments(){
        return $this->hasMany(comment::class,'post_id');
    }
    public function users(){
        return $this->belongsToMany(User::class,'post_user','user_id','post_id');
    }
}
