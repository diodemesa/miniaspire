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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

# LOAN APPLICATION
Route::get('/loans', 'LoanController@index')->name('view.loans');
Route::prefix('loan')->group(function () {
	Route::get('/submit', 'LoanController@processLoanApplication')->name('loan.submit');
	Route::get('/{loan}', 'LoanController@show')->name('loan.repayments');
});