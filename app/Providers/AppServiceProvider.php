<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Blade::if('admin', function () {
            return auth('admin')->check();
        });

        $appFullName = config('app.name');
        $appShortName = substr($appFullName,0, strpos($appFullName," "));
        View::share([
            'appName' => $appShortName,
            'ogDescription' => $appFullName.' - We provide reliable guidance and tailored strategies to help you navigate your path to financial growth with confidence and ease.',
            'ogTitle' => 'We\'re a comprehensive investment firm committed to offering a wide range of opportunities to help you invest with confidence. Whether you\'re just starting out or have years of experience, we\'re here to support every step of your journey.',
            'metaDescription' => $appShortName.' is a dynamic force built to provide outstanding investment solutions for everyone—from experienced traders to those just getting started.',
        ]);

        Schema::defaultStringLength(191);
    }
}
