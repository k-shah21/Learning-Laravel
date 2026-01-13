<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => 1,
        'title' => 'Programming',
        'salary' => '$55,000',
    ],
    [
        'id' => 2,
        'title' => 'Data Science',
        'salary' => '$75,000',
    ],
];

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs) {

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {


    // There are multiple ways we can fetch the job 

    // First Way 
    // Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });

    // Second way
    $job = Arr::first($jobs, fn($job) => $job['id'] === (int) $id);

    // dd($job);

    return view('jobs-details', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
