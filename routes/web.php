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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/sidebar', function () {
    return view('layouts.sidebar');
});



Route::get('/home', 'HomeController@index')->name('home') -> middleware('admin');
Route::get('/company', 'CompanyController@index')->name('company') -> middleware('admin');
Route::POST('/company/store','CompanyController@store') -> middleware('admin');
Route::get('/delCompany/{id}','CompanyController@destroy');
Route::get('/editCompany/{id}','CompanyController@edit');
Route::get('/profile/{id}','ProfileController@show');








Auth::routes([ 'register' => false ]);

