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


// Route::get('/', 'GuestController@index');

Route::get('/logindosen', 'GuestController@logindosen');

Route::get('/loginbiro2', 'GuestController@logindosen');

Route::get('/loginasdos', 'GuestController@logindosen');

Route::get('/login', 'GuestController@logindosen');

// setting auth
Route::middleware(['auth'])->group(function () {
    // set cek role in auth
    Route::middleware(['cekrole:asdos'])->group(function () {
        // excample to direct
        Route::get('/index', 'GuestController@index');
    });
});


