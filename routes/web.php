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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/','WelcomeController@index');
Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/teacher','WelcomeController@teacher');
Route::get('/search','WelcomeController@search');
Route::post('/book','WelcomeController@book');
Route::get('/ab','WelcomeController@ab');
Route::get('/book/approved/{id}','WelcomeController@approved');
Route::get('/pass_cange','WelcomeController@pass_cange');
Route::post('/change_password','WelcomeController@change_password');
Route::get('/student_cngpass','WelcomeController@student_cngpass');
Route::get('/teacherchngpass','WelcomeController@teacherchngpass');
Route::post('/edit','WelcomeController@edit');
Route::get('/editfind','WelcomeController@editfind');
Route::get('/editteacher','WelcomeController@editteacher');
Route::get('/history','WelcomeController@history');
Route::post('/balancesheet','WelcomeController@balancesheet');
Route::get('/balance','WelcomeController@balance');
Route::get('/student_list','WelcomeController@student_list');
Route::get('/teacher_list','WelcomeController@teacher_list');
Route::get('/student/delete/{id}','WelcomeController@student_delete');
Route::get('/teacher/delete/{id}','WelcomeController@teacher_delete');
Route::get('/about','WelcomeController@about');
