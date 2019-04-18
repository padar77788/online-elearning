<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavbercomposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->navberComposer();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
    public function navberComposer(){
      view()->composer('website.layouts.master','App\Http\Composer\NavberComposer');

    }
}
