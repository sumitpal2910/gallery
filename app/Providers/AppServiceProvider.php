<?php

namespace App\Providers;

use App\View\Components\GalleryLink;
use App\View\Components\GalleryModal;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component('gallery-link', GalleryLink::class);
        Blade::component('gallery-modal', GalleryModal::class);
    }
}
