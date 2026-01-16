<x-layout>
    <x-slot:heading class="font-bold">
        Edit Job : {{ $job->title }}
    </x-slot:heading>


    <form method="POST" action="/jobs/{{$job->id}}" class="max-w-md mx-auto">
        @csrf
        @method('patch')


        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="text" name="title" id="floating_title" value="{{ $job->title }}" required />
            <x-form-input-label for="floating_title" title="Title" />
            <x-form-error-input for="title" />

        </div>

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="text" name="salary" id="floating_salary" value="{{ $job->salary }}" required />
            <x-form-input-label for="floating_salary" title="Salary" />
            <x-form-error-input for="salary" />

        </div>


        <div class="flex items-center justify-between max-w-md mx-auto">

            <div>
                <x-button type="button" class="bg-red-500 text-white"
                    onclick="if(confirm('Are you sure?')) { document.getElementById('delete-form').submit(); }">
                    Delete
                </x-button>
            </div>
            <div>

                <x-button href="/jobs" class="bg-transparent border">
                    Cancel
                </x-button>

                <x-button type="submit">
                    Save
                </x-button>

            </div>
        </div>

    </form>
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>