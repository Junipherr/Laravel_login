<?php

namespace App\Providers;

use App\View\Components\Admin;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\HtmlLayout;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Register application services
    }

    public function boot()
    {
        // dd('Booting AppServiceProvider');
        Blade::component('htm-layout', HtmlLayout::class);
        Blade::component('admin-layout', Admin::class); 
        Blade::component('test-component', \App\View\Components\TestComponent::class);

    }    
}