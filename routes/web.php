<?php
use App\User;
use App\question;
use App\answer;

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
    Route::get('/language', function () {
        return view('questions/language');
    })->name('language');
Route::get('home', 'HomeController@index')->name('home');
Route::post('insert','QuestionController@insert')->name('insert');
route::get('admin','QuestionController@viewQuestionONAdmin');
route::get('programing/{lang}','QuestionController@viewQuestionOn')->name('programing');
Route::post('insertAnswer','QuestionController@insertAdminAnswer')->name('insertAnswer');
Route::post('Answer','QnswerController@insert');


