<?php

use App\Models\Jobs;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    // if i have disabled lazy loading  so i should eager load the data  
    $jobs = Jobs::with("employer")->get(); // Like this 
    // $jobs = Jobs::all(); // otherwise we can use this too

    return view('jobs', ['jobs' => $jobs]);
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
