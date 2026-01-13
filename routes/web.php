<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
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
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs  = [
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
