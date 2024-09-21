<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;

Route::get('/inactive', function(){
    return view('error.inactive');
})->name('inactive');

Route::get('/', function () {
     Auth::logout();
     if (Auth::check() && Auth::user()->role === 'user') {
         return redirect()->route('dashboard'); // Gantilah dengan tampilan yang sesuai
    } elseif(Auth::check() && Auth::user()->role === 'admin'){
         return redirect()->to('/admin');
    }

    return view('auth.login');
})->name('redirectLogin');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [CourseController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/{url}', [CourseController::class, 'url'])->name('dashboardURL');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
