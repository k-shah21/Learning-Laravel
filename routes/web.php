<?php

use App\Http\Controllers\JobController;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::resource('jobs', JobController::class);



Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
