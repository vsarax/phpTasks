<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers/{id}', 'App\Http\Controllers\CustomerController@show')->name('customer.show');
