<?php

namespace App\Providers;

// use GuzzleHttp\Psr7\Response;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    protected $policies = [
        'App\Models\Post' => 'app\Policies\PostPolicy'
    ];


    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Gate::define('update-post', function($user, $post) {
        //     return $user->id === $post->user_id ? Response::allow() : Response::deny('Not allowd');
        // });
    }
}
