<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Authenticatable
{
    use HasFactory, Notifiable;
       protected $fillable = [
    
            'name',
            'email',
            'photo',
            'password',
            'role',
            'status',
            'phone',
            'country',
            'address',
            'state',
            'city',
            'zip',
               
    ];

    public function post(){
        return $this->hasMany(Post::class);
    }

    // public function isCompany(){
    //      return $this->role === 'company';

    // }
}
