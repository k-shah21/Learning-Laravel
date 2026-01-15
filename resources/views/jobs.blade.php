<x-layout>
    <x-slot:heading class="font-bold text-2xl text-gray-800 mb-6">
        Job Listing Page
    </x-slot:heading>

    <ul class="space-y-4">
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block">

            <li class="bg-white hover:bg-gray-50 transition-colors shadow-md rounded-lg p-4 flex flex-col sm:flex-row sm:justify-between sm:items-center border border-gray-200">
                <div class="text-sm text-gray-500 mb-2 sm:mb-0">
                    {{ $job->employer->name }}
                </div>
                <span class="text-lg font-semibold text-gray-900 mb-2 sm:mb-0">
                    {{ $job['title'] }}
                </span>
                <span class="text-green-600 font-medium">
                    Pays {{ $job['salary'] }}
                </span>
            </li>

        </a>
        @endforeach
    </ul>
</x-layout>