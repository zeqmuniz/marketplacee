<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\ProfileController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//chamando rotas organizadas
foreach(File::allFiles(__DIR__ . '/web') as $route_file){
    require $route_file->getPathname();
}

require __DIR__.'/auth.php';

//Rota de login do administrador
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');

//Rota para recuperar senha
Route::get('admin/forgot-password', [AdminController::class, 'forgot'])->name('admin.forgot');

//Rota para perfil do administrador
Route::get('admin/profile', [ProfileController::class, 'index'])->name('admin.profile');

//Rota para salvar alterações do perfil administrador
Route::post('admin/profile/update', [ProfileController::class, 'update'])->name('admin.profile.update');
