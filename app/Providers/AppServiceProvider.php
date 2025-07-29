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
        


        Gate::define('edit-post', function (Company $company, Post $post) {
            // dd($jobPost->author_id == $company->id);
            // return $jobPost->author_id == $company->id;
            return $post->company()->is(Auth::guard('company')->user());

        });

    }
}
