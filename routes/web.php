<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Job
{
    public static function all(): array
    {
        return [
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
    }
}
Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {


    // There are multiple ways we can fetch the job 

    // First Way 
    // Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });

    // Second way
    $job = Arr::first(Job::all(), fn($job) => $job['id'] === (int) $id);

    // dd($job);

    return view('jobs-details', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
