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
    Route::get('/', 'PageController@home')->name('home');

    Route::get('login', function(){
        return view('voters.login');
    })->name('voters.login');

    Route::post('vote', 'PageController@vote');






Route::prefix('admin' )->group(function (){

    Route::get('/','AdminController@home')->name('admin.home');

    Route::get('login', function(){
        return view('admin.login');
    })->name('admin.login');

    Route::post('addpost', 'AdminController@addPost');

    Route::post('addcandidate', 'AdminController@addCandidate');

    Route::delete('delete/{id}', 'AdminController@candidateDelete');


});
