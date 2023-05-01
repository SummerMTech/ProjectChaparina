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
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    return view('home');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/mapa', function () {
    return view('vistas.mapa');
})->name('mapa');

Route::get('/vista', function () {
    return view('vista');
});

Route::get('/notificaciones', function () {
    return view('notificaciones');
})->name('notificaciones')->middleware('auth');

Route::get('/notificar', [NotificationController::class, 'enviarNotificacion']);

Route::get('/animales/{id}/editar', [AnimalesController::class, 'editar'])->name('animales.edit');

Route::put('/animales/{id}',[AnimalesController::class, 'update'])->name('animales.update');


// ruta de animales
Route::get('/animales',[AnimalesController::class,'index']) ->name('animalesLista.index');
Route::get('/animalesFugados',[AnimalesController::class,'index2']) ->name('animalesLista.index2');
Route::get('/veterinario',[AnimalesController::class,'indexVet']) ->name('animalesLista.indexVet');

Route::get('/setup',[setupController::class,'create']) ->name('setup.index');

Route::get('/login',[ControlSesion::class,'create'])->middleware('guest')->name('login.index');
Route::post('/login',[ControlSesion::class,'store'])->name('login.store');

Route::get('/logout',[ControlSesion::class,'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


  
Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/registro',[ControlRegistro::class,'create'])
    ->middleware('guest') 
    ->name('registro.index');

Route::post('/registro',[ControlRegistro::class,'store']) ->name('registro.store');  

Route::get('/registroAnimales',[registroAnimalesController::class,'create'])
    ->name('registroAnimales.index');
Route::post('/registroAnimales',[registroAnimalesController::class,'store']) 
    ->name('registroAnimales.store');

Route::delete('/users/{user}', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');

Route::get('/descargar-tabla-pdf', 'App\Http\Controllers\TablaController@descargarTablaPdf')->name('descargar-tabla-pdf');