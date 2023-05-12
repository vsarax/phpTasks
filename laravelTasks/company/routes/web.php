<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers/{id}', 'App\Http\Controllers\CustomerController@show')->name('customer.show');

Route::get('/cars', 'App\Http\Controllers\RentCarController@index')->name('index');

Route::post('/cars/{id}/rent', 'App\Http\Controllers\RentCarController@rentCar')->name('rentCar');

Route::get('/cars/{id}/rent', 'App\Http\Controllers\RentCarController@showRentForm')->name('showRentForm');