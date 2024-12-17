<?php

use App\Http\Controllers\backend\AdminController;
use Illuminate\Support\Facades\Route;

//Rota Admin
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])
->middleware(['auth', 'admin'])
->name('admin.dashboard');

