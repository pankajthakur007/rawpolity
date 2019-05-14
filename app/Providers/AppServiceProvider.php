<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;
use App\Images;
use View;

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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);
       $Logo = Images::where(['type'=>1,'status'=>1])->first();
       $sliders = Images::where(['type'=>2,'status'=>1])->get();
       View::share('Logo', $Logo->image_url);
       View::share('sliders',$sliders);
       
    }
}
