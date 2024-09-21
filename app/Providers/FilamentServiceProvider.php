<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Auth;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
         Filament::serving(function () {
            if (Auth::check() && Auth::user()->role !== 'admin') {
                Auth::logout(); // Logout user
                // Arahkan ke halaman login
                header("Location: /login");
                exit();
            }
        });
    }
}

