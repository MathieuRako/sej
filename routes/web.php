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
    
    Route::prefix('judokas')->group(function () {
        Route::any('/','Admin\JudokasController@index');
        Route::post('/update','Admin\JudokasController@update');
        Route::post('/add','Admin\JudokasController@add');
        Route::get('/remove','Admin\JudokasController@remove');
          
    });
    Route::prefix('pictures')->group(function(){
        Route::get('/', function () {
            return view('admin.pictures');
        });
        Route::prefix('sponsors')->group(function(){
            Route::get('/','Admin\PicturesController@indexSponsor');
            Route::post('/','Admin\PicturesController@indexSponsor'); 
            Route::post('/update','Admin\PicturesController@updateSponsor');
            Route::post('/add','Admin\PicturesController@addSponsor');
            Route::get('/remove','Admin\PicturesController@removeSponsor');
        });
        Route::any('/pages','Admin\PicturesController@indexPage');
        Route::post('/update','Admin\PicturesController@updatePicture')->name('updatePicture'); 
    });

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
Route::get('/sponsors', 'Pages\SponsorsController@index')->name('sponsors');
Route::get('/login', 'Auth\LoginController');
Route::get('/register', 'Auth\RegisterController');
Route::get('/club', 'Pages\ClubController@indexClub')->name('club');
Route::get('/informations', 'Pages\InformationController@indexInformation')->name('informations');
Route::get('/{name}', 'Pages\PageController@index')->name('page');



Auth::routes();
