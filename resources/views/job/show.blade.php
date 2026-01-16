<x-layout>
    <x-slot:heading class="font-bold">
        Job Listing page
    </x-slot:heading>

    @if(isset($job['title']))
    <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }}

    <x-button href="/jobs/{{ $job->id }}/edit">
        Edit Job
    </x-button>
    @else
    Blal Blah
    @endif


</x-layout>