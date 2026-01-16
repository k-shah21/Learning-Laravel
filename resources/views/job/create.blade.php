<x-layout>
    <x-slot:heading class="font-bold">
        Create Job
    </x-slot:heading>


    <form method="POST" action="/jobs" class="max-w-md mx-auto">
        @csrf

        <div class="relative z-0 w-full mb-5 group">
            <input type="title" name="title" id="floating_title" class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" placeholder=" " required />
            <label for="floating_title" class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Title</label>

            @error('title')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="salary" name="salary" id="floating_salary" class="block py-2.5 px-0 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer" placeholder=" " required />
            <label for="floating_salary" class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">salary</label>

            @error('salary')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <x-button type="submit">
            Save
        </x-button>

    </form>




</x-layout>