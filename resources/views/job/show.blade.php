<x-layout>
    <x-slot:heading class="font-bold">
        Job Details
    </x-slot:heading>

    @if(isset($job))
    <div class="max-w-2xl mx-auto bg-white shadow-lg rounded-xl border border-gray-200 p-6 space-y-5">

        <!-- Employer -->
        <div class="text-sm text-gray-500">
            Employer
            <div class="text-base font-medium text-gray-900">
                {{ $job->employer->name ?? 'N/A' }}
            </div>
        </div>

        <!-- Title -->
        <div>
            <h2 class="text-2xl font-bold text-gray-900">
                {{ $job->title }}
            </h2>
        </div>

        <!-- Salary -->
        <div class="inline-flex items-center px-4 py-2 rounded-full bg-green-100 text-green-700 font-semibold w-fit">
            Pays {{ $job->salary }}
        </div>

        <!-- Meta info -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-600">
            <div>
                <span class="font-medium">Job ID:</span> {{ $job->id }}
            </div>
            <div>
                <span class="font-medium">Posted:</span> {{ $job->created_at->diffForHumans() }}
            </div>
        </div>

        <!-- Actions -->
        <div class="flex items-center gap-3 pt-4 border-t">
            <x-button href="/jobs/{{ $job->id }}/edit">
                Edit Job
            </x-button>

            <x-button href="/jobs" class="bg-transparent border">
                Back to Jobs
            </x-button>
        </div>

    </div>
    @else
    <div class="text-center text-gray-500">
        Job not found.
    </div>
    @endif
</x-layout>