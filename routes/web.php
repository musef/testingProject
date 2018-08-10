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
    return view('welcome');
});

Route::get('user/{nif}/{year}/{user}/{bank}', function ($nif,$year,\App\User $user,$bank) {
    return view('welcome')
        ->with('nif',$nif)
        ->with('year',$year)
        ->with('nameuser',$user->email)
        ->with('bank',$bank->shortname);
})->where(['nif'=>'[0-9]{8}[A-Za-z]{1}','year'=>'[0-9]+','user'=>'[0-9]+','bank'=>'[0-9]+']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/user', function(){
    return view('/home')
        ->with('data','you are admin');
})->middleware('checkUser:admin,7');
