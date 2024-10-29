<?php

namespace App\Providers;

use App\Models\Inscripcion;
use App\Observers\InscripcionObserver;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

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
//        $sessionDelUsuario = Session::get('locale');
//
//        App::setLocale($sessionDelUsuario);
    }
}
