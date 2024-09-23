<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\CheckRole;

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

Route::middleware(['auth', CheckRole::class.':admin'])->group(function(){
    route::get('/admin',[AdminController::class,'index'])->name('admin.index');
    route::get('/admin/kursus',[AdminController::class,'indexKursus'])->name('admin.kursus');

    // Route untuk mengambil data tabel
    Route::get('/data-table/user', [AdminController::class,'getData'])->name('data.table.user');
    Route::get('/data-table/kursus',[AdminController::class,'getDataKursus'])->name('data.table.kursus');

    // Rute untuk memperbarui status is_active
    Route::post('/user/toggle', [AdminController::class, 'toggleStatus'])->name('user.toggle');


    //Route simpan data
    Route::post('/admin/kursus/store', [AdminController::class, 'tambahKursus'])->name('admin.kursus.store');


    //edit data
    Route::post('/kursus/update', [AdminController::class, 'updateKursus'])->name('kursus.update');

    //delete data
    Route::delete('/kursus/delete/{id}', [AdminController::class, 'destroy'])->name('admin.kursus.destroy');


    Route::post('/user/reset-password', [AdminController::class, 'resetPassword'])->name('user.resetPassword');

});

require __DIR__ . '/auth.php';
