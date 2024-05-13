<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Artikelcontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
    return '<h1>Halo, Gamelab Indonesia</h1>';
});
Route::get('/user/{id}', function ($id) {
    return '<h1>Ini adalah halaman user : ' . $id . '</h1>';
});
Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/about', [aboutController::class, 'index']);

//Route::resource('/artikel', '\App\Http\Controllers\ArtikelController::class');
Route::resource('konter',\App\Http\Controllers\TopupController::class);



