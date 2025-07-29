<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

     protected $fillable = [
    
            'author_id',
            'status',
            'title',
            'salary',
            'position',
            'address',
            'job_responsibilities',
            'required_skills',
            'deadline',
            'vacancy',
        
    ];

    public function categories(){
         return $this->belongsToMany(Category::class);
    }

      public function locations(){
         return $this->belongsToMany(Location::class);
    }

    public function company(){
        return $this->belongsTo(Company::class, 'author_id');
    }


}
