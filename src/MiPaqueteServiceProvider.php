<?php

namespace TuNombre\MiPaquete;

use Illuminate\Support\ServiceProvider;

class MiPaqueteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Aquí puedes registrar rutas, vistas, migraciones, etc.
    }

    public function register()
    {
        // Aquí puedes registrar enlaces, comandos, etc.
        $this->app->bind('mipaquete', function () {
            return new MiPaquete();
        });
    }
}
