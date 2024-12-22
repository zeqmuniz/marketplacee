<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;

//Rota Admin
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])
->middleware(['auth', 'admin'])
->name('admin.dashboard');

//Rota para perfil do administrador
Route::get('admin/profile', [ProfileController::class, 'index'])
->middleware(['auth', 'admin'])
->name('admin.profile');

//Rota para salvar alterações do perfil administrador
Route::post('admin/profile/update', [ProfileController::class, 'update'])
->middleware(['auth', 'admin'])
->name('admin.profile.update');

//Rota para atualizar senha do perfil administrador
Route::post('admin/profile/update/password', [ProfileController::class, 'updatePassword'])
->middleware(['auth', 'admin'])
->name('admin.profile.password');

//Rota para Slider DESTAQUE
Route::resource('admin/slider', SliderController::class)
->middleware(['auth', 'admin']);
