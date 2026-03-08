<?php

namespace App\Providers;

use App\Filament\Pages\Auth\Register;
use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Filament::serving(function () {
        //     Filament::registerPages([
        //         Register::class,
        //     ]);
        // });
    }
}
