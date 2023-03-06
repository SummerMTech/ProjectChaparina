<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControlRegistro;
use App\Http\Controllers\ControlSesion;
use App\Http\Controllers\AnimalesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\setupController;
use App\Http\Controllers\registroAnimalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TablaController;
Route::get('/', function () {
    return view('home');
});

Route::get('/principal', function () {
    return view('principal');
});

//Route::get('/setup', function () {
//    return view('setup');
//});

// ruta de animales
Route::get('/animales',[AnimalesController::class,'index']) ->name('animalesLista.index');
Route::get('/setup',[setupController::class,'create']) ->name('setup.index');

Route::get('/login',[ControlSesion::class,'create'])->middleware('guest')->name('login.index');
Route::post('/login',[ControlSesion::class,'store'])->name('login.store');

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

Route::get('/registroAnimales',[registroAnimalesController::class,'create'])
    ->name('registroAnimales.index');
Route::post('/registroAnimales',[registroAnimalesController::class,'store']) 
    ->name('registroAnimales.store');

Route::delete('/users/{user}', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');

Route::get('/descargar-tabla-pdf', 'App\Http\Controllers\TablaController@descargarTablaPdf')->name('descargar-tabla-pdf');