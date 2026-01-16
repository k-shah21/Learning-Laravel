<x-layout>
    <x-slot:heading class="font-bold text-2xl text-gray-800 mb-6">
        Job Listing Page
    </x-slot:heading>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 min-h-[calc(100vh-300px)]">

        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job->id }}"
            class="block bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-lg transition-shadow p-5 h-fit">

            <div class="text-sm text-gray-500 mb-2">
                {{ $job->employer->name }}
            </div>

            <h3 class="text-lg font-semibold text-gray-900 mb-3">
                {{ $job->title }}
            </h3>

            <div class="text-green-600 font-medium">
                Pays {{ $job->salary }}
            </div>
        </a>
        @endforeach
    </div>


    <div class="mt-5">
        {{ $jobs->links() }}
    </div>
</x-layout>