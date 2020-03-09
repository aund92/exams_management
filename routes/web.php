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
    return redirect('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
//    Route::get('/', function () {
        // Uses first & second Middleware
//    });

//    Route::get('user/profile', function () {
        // Uses first & second Middleware
//    });

    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

    Route::prefix('subject')->group(function () {
        Route::get('/', 'SubjectController@index')->middleware('auth')->name('subject');
        Route::get('/create', 'SubjectController@create')->middleware('auth')->name('create-subject');
    });

    Route::prefix('questions')->group(function () {
        Route::get('/', 'QuestionController@index')->middleware('auth')->name('questions');
        Route::get('/create', 'QuestionController@create')->middleware('auth')->name('create-question');
    });

    Route::prefix('exams')->group(function () {
        Route::get('/', 'ExamController@index')->middleware('auth')->name('exams');
        Route::get('/create', 'ExamController@create')->middleware('auth')->name('create-exams');
    });

});

