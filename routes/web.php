<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/belts', function () {
    return view('belts');
})->name('belts');

Route::get('/club', function () {
    return view('club');
})->name('club');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/informations', function () {
    return view('informations');
})->name('informations');

Route::get('/judo', function () {
    return view('judo');
})->name('judo');

Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors');