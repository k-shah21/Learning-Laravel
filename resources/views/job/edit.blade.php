<x-layout>
    <x-slot:heading class="font-bold">
        Edit Job: {{ $job['title'] }}
    </x-slot:heading>


    <form method="POST" action="/jobs/{{$job->id}}" class="max-w-md mx-auto">
        @csrf
        @method('patch')

        <div class="relative z-0 w-full mb-5 group">
            <input type="title" name="title" value="{{ $job->title }}" id="floating_title" class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" placeholder=" " required />
            <label for="floating_title" class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Title</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="salary" name="salary" value="{{ $job->salary }}" id="floating_salary" class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" placeholder=" " required />
            <label for="floating_salary" class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">salary</label>
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