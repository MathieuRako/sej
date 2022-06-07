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



Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');
    Route::prefix('category')->group(function () {
        Route::post('/', 'Admin\ScheduleController@updateCategory');
        Route::get('/remove', 'Admin\ScheduleController@removeCategory');
        Route::post('/add', 'Admin\ScheduleController@addCategory');
    });
    Route::prefix('training')->group(function () {
        Route::post('/add', 'Admin\ScheduleController@addTraining');
        Route::post('/', 'Admin\ScheduleController@updateTraining');
        Route::get('/remove', 'Admin\ScheduleController@removeTraining');
    });
    Route::prefix('texts')->group(function(){
        Route::get('/remove', 'Admin\TextsController@removeText');
        Route::post('/add', 'Admin\TextsController@addText');
        Route::get('/informations', 'Admin\InformationController@index');
        Route::post('/', 'Admin\TextsController@updateText');
        Route::get('/', function () {
            return view('admin.texts');
        });
    
        Route::get('/general', 'Admin\GeneralController@index')->name('general');
        Route::get('/{name}', 'Admin\TextsController@index')->name('texts');
    });

});
Route::get('/home', 'Pages\HomeController@indexHome')->name('home');
Route::get('/login', 'Auth\LoginController');
Route::get('/register', 'Auth\RegisterController');
Route::get('/club', 'Pages\ClubController@indexClub')->name('club');
Route::get('/informations', 'Pages\InformationController@indexInformation')->name('informations');
Route::get('/{name}', 'Pages\PageController@index')->name('page');



Auth::routes();
