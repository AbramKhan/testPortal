<?php

namespace App\Policies;

use App\Constants\Role;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{

    //  public function create(Company $company, Post $post)
    // {
    //    dd($company->id, $post->author_id, $company->id === $post->author_id);
    //          return $company->role === Role::COMPANY;
        
    // }

    //   public function updateByAdmin(Admin $admin, Post $post): bool
    // {
    //     // A company user can only update their own posts
    //     if ($admin->isAdmin()) {
    //         return true;
    //     }

    //     //  if ($company->isCompany() && auth()->guard('company')->id() === $post->author_id) {
    //     //     return true;
    //     // }

    //     // Otherwise, deny access
    //     return false;
    // }
   

   
}
