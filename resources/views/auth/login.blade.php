<x-layout>
    <x-slot:heading class="font-bold">
        Login
    </x-slot:heading>


    <form method="POST" action="/login" class="max-w-md mx-auto">
        @csrf

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="email" name="email" id="floating_email" placeholder=" " required :value="old('email')" />
            <x-form-input-label for="floating_email" title="Email Address" />
            <x-form-error-input for="email" />
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="password" name="password" id="floating_password" placeholder=" " required />
            <x-form-input-label for="floating_password" title="Password" />
            <x-form-error-input for="password" />
        </div>

        <div class="flex justify-end">
            <x-button type="submit" class="cursor-pointer">
                Cancel
            </x-button>
            <x-button type="submit" class="cursor-pointer bg-gray-800 text-white">
                Login
            </x-button>
        </div>

    </form>

</x-layout>