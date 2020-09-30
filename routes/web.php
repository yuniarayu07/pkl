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

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('home');
});
Route::get('/input', function () {
    return view('input');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/jenis', function () {
    return view('jenis');
});
Route::get('/home_user', 'login@index');
Route::get('/login', function() {
    return view('login');
});
Route::post('/loginPost', 'login@loginPost')-> name('login');
Route::get('/register', 'login@getregister');
Route::post('/registerPost', 'login@registerPost')-> name('register');
Route::get('/logout', 'login@logout');
Route::get('/home',function() {
    return 'home';
})->name('home' );
