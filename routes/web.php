<?php

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
Auth::routes();


Route::group(['middleware'=>['web']],function(){

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
});
Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/python', function () {
        return view('questions/python');
    })->name('python');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('insert','python_question_controller@insert');
route::get('admin','python_question_controller@viewQuestionONAdmin');
route::get('python','python_question_controller@viewQuestionOn');

