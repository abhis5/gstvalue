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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/sidebar', function () {
    return view('layouts.sidebar');
});

Route::get('/company/add', function () {
    return view('company.addData');
});



Route::get('/home', 'HomeController@index')->name('home') -> middleware('admin');
Route::get('/company', 'CompanyController@index')->name('company') -> middleware('admin');
Route::POST('/company/store','CompanyController@store') -> middleware('admin');
Route::get('/delCompany/{id}','CompanyController@destroy');



Route::get('/company/edit/{id}','CompanyController@edit');
Route::POST('/company/edit/submit/{id}','CompanyController@update');
Route::get('/profile/{id}','ProfileController@show')-> middleware('admin') -> name('profile');
Route::get('/profile/{id}/editForm','ProfileController@showEdit')-> middleware('admin');
Route::get('/filing/store','ProfileController@store') -> middleware('admin');
Route::get('/profile/editForm/submit/{id}','ProfileController@edit')-> middleware('admin');





 Route::get('/reports', 'ReportController@index')->name('report') -> middleware('admin');
 Route::POST('/reports/show', 'ReportController@show')->name('reports.show') -> middleware('admin');




Auth::routes([ 'register' => false ]);

