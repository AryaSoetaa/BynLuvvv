<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\KelaspraktikumController;
use App\Http\Controllers\ModulController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () { 
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');  

    // Routes CRUD untuk Kelas Praktikums
    Route::get('admin/kelaspraktikums', [KelaspraktikumController::class, 'index'])->name('admin.kelaspraktikums.index'); // List
    Route::get('admin/kelaspraktikums/create', [KelaspraktikumController::class, 'create'])->name('admin.kelaspraktikums.create'); // Form tambah
    Route::post('admin/kelaspraktikums', [KelaspraktikumController::class, 'store'])->name('admin.kelaspraktikums.store'); // Simpan data
    Route::get('admin/kelaspraktikums/{id}', [KelaspraktikumController::class, 'show'])->name('admin.kelaspraktikums.show'); // Lihat detail
    Route::get('admin/kelaspraktikums/{id}/edit', [KelaspraktikumController::class, 'edit'])->name('admin.kelaspraktikums.edit'); // Form edit
    Route::put('admin/kelaspraktikums/{id}', [KelaspraktikumController::class, 'update'])->name('admin.kelaspraktikums.update'); // Update data
    Route::delete('admin/kelaspraktikums/{id}', [KelaspraktikumController::class, 'destroy'])->name('admin.kelaspraktikums.destroy'); // Hapus data

    // Route untuk Modul
    Route::prefix('admin/kelaspraktikum/{kelas_praktikum}')->group(function () {
        Route::get('modul', [ModulController::class, 'index'])->name('admin.kelaspraktikum.modul.index');
        Route::get('modul/create', [ModulController::class, 'create'])->name('admin.modul.create');
        Route::post('modul', [ModulController::class, 'store'])->name('admin.modul.store');
        Route::get('modul/{modul}', [ModulController::class, 'show'])->name('admin.modul.show');
        Route::get('modul/{modul}/edit', [ModulController::class, 'edit'])->name('admin.modul.edit');
        Route::put('modul/{modul}', [ModulController::class, 'update'])->name('admin.modul.update');
        Route::delete('modul/{modul}', [ModulController::class, 'destroy'])->name('admin.modul.destroy');
    });

    Route::get('/tables', function () {
        return view('admin.tables');
    })->name('admin.tables'); 
    Route::get('/ui-elements', function () {
        return view('admin.ui-elements');
    })->name('admin.ui-elements');
});


Route::middleware(['auth', 'role:admin|dosen'])->group(function () {
    // Fitur yang bisa diakses oleh admin dan dosen
    Route::get('pendafprak/index', function () {
        return view('pendafprak.index'); 
    })->name('pendafprak.index');
});

Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosen', function () {
        return view('dosen.dashboard'); 
    })->name('dosen.dashboard');
});

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/mahasiswa', function () {
        return view('mahasiswa.dashboard'); 
    })->name('mahasiswa.dashboard');
});


Route::group(['middleware' => ['permission:publish articles']], function () {

});

 // Group routes that need admin role and authentication
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
});




require __DIR__.'/auth.php';

