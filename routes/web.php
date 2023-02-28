<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlRegistro;
use App\Http\Controllers\ControlSesion;
use App\Http\Controllers\AnimalesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\setupController;


Route::get('/', function () {
    return view('home');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/setup', function () {
    return view('setup');
});

// ruta de animales
Route::get('/animales',[AnimalesController::class,'index']) ->name('animalesLista.index');
//Route::get('/setup',[setupController::class,'index']) ->name('setup.index');
Route::get('/login',[ControlSesion::class,'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login',[ControlSesion::class,'store']) ->name('login.store');
Route::get('/logout',[ControlSesion::class,'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/registro',[ControlRegistro::class,'create'])
    ->middleware('guest') 
    ->name('registro.index');
   
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::post('/registro',[ControlRegistro::class,'store']) ->name('registro.store');  