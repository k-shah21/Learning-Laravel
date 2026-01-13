<x-layout>
    <x-slot:heading class="font-bold">
        Job Listing page
    </x-slot:heading>

    <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }}
</x-layout>