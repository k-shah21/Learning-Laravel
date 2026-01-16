<x-layout>
    <x-slot:heading class="font-bold">
        Create Job
    </x-slot:heading>


    <form method="POST" action="/jobs" class="max-w-md mx-auto">
        @csrf

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="text" name="title" id="floating_title" placeholder=" " required />
            <x-form-input-label for="floating_title" title="Title" />
            <x-form-error-input for="title" />

        </div>

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="text" name="salary" id="floating_salary" placeholder=" " required />
            <x-form-input-label for="floating_salary" title="Salary" />
            <x-form-error-input for="salary" />

        </div>

        <x-button type="submit" class="cursor-pointer bg-gray-800 text-white">
            Save
        </x-button>

    </form>

</x-layout>