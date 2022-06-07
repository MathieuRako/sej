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

Route::get('/admin',function(){
    return view('admin.index');
})->name('admin');

Route::post('/admin/category','Admin\ScheduleController@updateCategory');
Route::get('/admin/category/remove','Admin\ScheduleController@removeCategory');
Route::post('/admin/category/add','Admin\ScheduleController@addCategory');
Route::post('/admin/training/add','Admin\ScheduleController@addTraining');
Route::post('/admin/training','Admin\ScheduleController@updateTraining');
Route::get('/admin/training/remove','Admin\ScheduleController@removeTraining');
Route::get('/admin/texts/remove', 'Admin\TextsController@removeText');
Route::post('/admin/texts/add','Admin\TextsController@addText');
Route::get('/admin/texts/informations','Admin\InformationController@index');
Route::post('/admin/texts','Admin\TextsController@updateText');
Route::get('/admin/texts',function(){
    return view('admin.texts');
});

Route::get('/admin/texts/{name}','Admin\TextsController@index')->name('texts');
Route::get('/home', 'Pages\HomeController@indexHome')->name('home');
Route::get('/club', 'Pages\ClubController@indexClub')->name('club');
Route::get('/informations', 'Pages\InformationController@indexInformation')->name('informations');
Route::get('/{name}', 'Pages\PageController@index')->name('page');

