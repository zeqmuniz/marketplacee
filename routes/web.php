<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\VendorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

//Rota Admin
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])
->middleware('auth')->name('admin.dashboard');

//Rota Vendedor
Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])
->middleware('auth')->name('vendor.dashboard');
