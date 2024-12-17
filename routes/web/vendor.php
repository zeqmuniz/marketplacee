<?php

use App\Http\Controllers\backend\VendorController;
use Illuminate\Support\Facades\Route;

//Rota Vendedor
Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])
->middleware(['auth', 'vendor'])
->name('vendor.dashboard');
