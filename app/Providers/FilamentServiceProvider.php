<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            // Custom logic to restrict access based on user role
            if (auth()->check() && auth()->user()->role !== 'admin') {
                abort(403, 'Unauthorized');
            }
        });
    }
}

