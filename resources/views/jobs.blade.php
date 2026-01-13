<x-layout>
    <x-slot:heading class="font-bold">
        Job Listing page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)

        <a href="/jobs/{{ $job['id'] }}">
            <li><strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }}</li>
        </a>
        @endforeach
    </ul>
</x-layout>