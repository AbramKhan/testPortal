<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{

    //   protected $policies = [
    //     Post::class => PostPolicy::class,
    // ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Post::class, PostPolicy::class);


    //    Gate::define('edit-post', function (Company $company, Post $post) {
           
    //         return $post->company->is(Auth::guard('company')->user());
    //         // return $post->company->is($company);

    //     });

    }
}
