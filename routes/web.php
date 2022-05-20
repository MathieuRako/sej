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
    return view('pages.belts');
})->name('belts');

Route::get('/club', function () {
    return view('pages.club');
})->name('club');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/informations', 'Pages\InformationController@index')->name('informations');

Route::get('/judo', function () {
    return view('pages.judo');
})->name('judo');

Route::get('/sponsors', function () {
    return view('pages.sponsors');
})->name('sponsors');