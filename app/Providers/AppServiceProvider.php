<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\HtmlLayout;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
   // app/Providers/AppServiceProvider.php

   public function boot()
   {
       // Register the class-based component
       Blade::component('htm-layout', HtmlLayout::class);
   }   

}
