<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Jobs::with("employer")->latest()->simplePaginate(15);
        return view('job.index', compact('jobs'));
    }

    public function create()
    {
        return view('job.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'required|min:3',
            'salary' => 'required|min:3',
        ]);

        Jobs::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => 1,
        ]);

        return redirect()->route('jobs.index');
    }

    public function show(Jobs $job)
    {
        return view('job.show', compact('job'));
    }

    public function edit(Jobs $job)
    {
        return view('job.edit', compact('job')); // form to edit
    }

    public function update(Request $request, Jobs $job)
    {
        $request->validate([
            'title'  => 'required|min:3',
            'salary' => 'required|min:3',
        ]);

        $job->update([
            'title' => $request->title,
            'salary' => $request->salary,
        ]);

        return redirect()->route('jobs.show', $job);
    }

    public function destroy(Jobs $job)
    {
        $job->delete();
        return redirect()->route('jobs.index');
    }
}
