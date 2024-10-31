<?php

namespace App\Providers;

use App\Models\Empresa;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Slides\Saml2\Events\SignedIn;

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

        Event::listen(SignedIn::class, function (SignedIn $event) {


        });
    }
}
