<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $fillable = [

        'title',

    ];

    public function posts(){
    return $this->belongsToMany(Post::class);
}
}
