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









Route::get('/', function () {
    return redirect()->route('page', ['name' => 'home']);
});

Route::get('/login','Auth\LoginController');
Route::get('/register','Auth\RegisterController');
Route::get('/club', 'Pages\ClubController@indexClub')->name('club');
Route::get('/informations', 'Pages\InformationController@indexInformation')->name('informations');
Route::get('/{name}', 'Pages\PageController@index')->name('page');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

