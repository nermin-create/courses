<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
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
        //
                //
        RedirectIfAuthenticated::redirectUsing(function(){
              return route('admin.dashboard');
        
    });
        Authenticate::redirectUsing(function () {
     Session::flash('error', 'You must be logged in to access this page.');
     return redirect()->route('admin.login');
});
    }
}
