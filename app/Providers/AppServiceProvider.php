<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    public function boot()
    {

      if(config('app.env') === 'production') {
          URL::forceScheme('https');
      }


        Paginator::useBootstrap();
    }



    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Dont use migrate from library passport
        Passport::ignoreMigrations();
    }
}
