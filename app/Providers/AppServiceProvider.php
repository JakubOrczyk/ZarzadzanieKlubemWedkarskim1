<?php

namespace App\Providers;

use App\Models\Lake;
use App\Models\Fish;
use App\Models\Tournament;
use App\Policies\LakePolicy;
use App\Policies\FishPolicy;
use App\Policies\TournamentPolicy;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }



    public function boot()
    {
        $this->app->afterResolving(EncryptCookies::class, function ($middleware) {
            $middleware->disableFor('laravel_session');
            $middleware->disableFor('XSRF-TOKEN');
        });

        Gate::define('is-admin', function (User $user) {
            return $user->isAdmin();
        });
    }
}
