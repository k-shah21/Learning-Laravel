<?php

use App\Models\Jobs;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Jobs::all()]);
});

Route::get('/jobs/{id}', function ($id) {


    // There are multiple ways we can fetch the job 

    // First Way 
    // Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });

    // Second way
    $job = Jobs::find($id);

    return view('jobs-details', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
