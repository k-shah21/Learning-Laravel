<?php

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    // if i have disabled lazy loading  so i should eager load the data  
    // $jobs = Jobs::with("employer")->get(); // Like this 
    // $jobs = Jobs::all(); // otherwise we can use this too
    $jobs = Jobs::with("employer")->latest()->simplePaginate(3);

    return view('job.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('job.create');
});

Route::post('/jobs', function () {
    Jobs::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{id}', function ($id) {

    // There are multiple ways we can fetch the job 

    // First Way 
    // Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] === $id;
    // });

    // Second way
    $job = Jobs::find($id);

    return view('job.show', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
