<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Registra cualquier servicio de la aplicación.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Realiza cualquier acción de inicialización que la aplicación necesite.
     *
     * @return void
     */
    public function boot()
    {
        // Registrar el componente de Blade
        Blade::component('alert-component', \App\View\Components\AlertComponent::class);
    }
}
