<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newUser;

//Acceso a las paginas
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/registro', function () {
    return view('registro');
})->name('registro');

Route::get('/alumnos', [newUser::class, 'getall'])->name('alumnos');

//Controladores 
Route::get('/usuarios', [newUser::class, 'getall'])->name('usuarios.index');
Route::post('/usuarios', [newUser::class, 'insert'])->name('usuarios.store');
Route::delete('/alumnos/{id}', [newUser::class, 'borrar'])->name('alumnos.delete');
