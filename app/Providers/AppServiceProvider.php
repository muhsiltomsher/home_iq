<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        // ✅ Register Custom Blade Components
        Blade::component('components.home.blog-list', 'blogList');
        Blade::component('components.home.testimonials', 'testimonials');
        Blade::component('components.footer', 'footer');

        // ✅ Use Bootstrap Pagination
        Paginator::useBootstrap();

        // ✅ Define Global Categories Data
        $categories = [
            [
                'name' => 'Smart Home Security',
                'products' => [
                    ['title' => 'Smart Locks', 'description' => 'Secure your home with smart locks.', 'image' => 'smart-locks.jpg'],
                    ['title' => 'Security Cameras', 'description' => 'Monitor your home anytime.', 'image' => 'security-cameras.jpg'],
                    ['title' => 'Video Doorbells', 'description' => 'See who’s at your door.', 'image' => 'video-doorbells.jpg'],
                ]
            ],
            [
                'name' => 'Climate Control',
                'products' => [
                    ['title' => 'Thermostats', 'description' => 'Save energy with smart thermostats.', 'image' => 'thermostats.jpg'],
                    ['title' => 'Smart Air Purifiers', 'description' => 'Keep your air clean.', 'image' => 'air-purifiers.jpg'],
                    ['title' => 'AC Controllers', 'description' => 'Control your AC remotely.', 'image' => 'ac-controllers.jpg'],
                ]
            ],
            [
                'name' => 'Home Automation',
                'products' => [
                    ['title' => 'Smart Lighting', 'description' => 'Automate your lighting.', 'image' => 'smart-lighting.jpg'],
                    ['title' => 'Smart Plugs', 'description' => 'Control appliances remotely.', 'image' => 'smart-plugs.jpg'],
                    ['title' => 'Voice Assistants', 'description' => 'Use voice commands at home.', 'image' => 'voice-assistants.jpg'],
                ]
            ]
        ];

        // ✅ Define Global Services Data
        $services = [
            [
                'name' => 'Home Services',
                'products' => [
                    ['title' => 'AC Maintenance', 'description' => 'Keep your AC running smoothly.', 'image' => 'ac-maintenance.jpg'],
                    ['title' => 'Home Automation', 'description' => 'Automate your home systems.', 'image' => 'home-automation.jpg'],
                    ['title' => 'Energy Audits', 'description' => 'Optimize energy use in your home.', 'image' => 'energy-audits.jpg'],
                ]
            ]
        ];

        // ✅ Share categories and services globally with all views
        View::share('categories', $categories);
        View::share('services', $services);
    }
}
