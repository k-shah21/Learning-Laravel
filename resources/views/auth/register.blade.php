<x-layout>
    <x-slot:heading class="font-bold">
        Register
    </x-slot:heading>


    <form method="POST" action="/register" class="max-w-md mx-auto">
        @csrf

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="text" name="first_name" id="floating_first_name" placeholder=" " required />
            <x-form-input-label for="floating_first_name" title="First Name" />
            <x-form-error-input for="first_name" />
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="text" name="last_name" id="floating_Last_name" placeholder=" " required />
            <x-form-input-label for="floating_Last_name" title="Last Name" />
            <x-form-error-input for="Last_name" />
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="email" name="email" id="floating_email" placeholder=" " required />
            <x-form-input-label for="floating_email" title="Email Address" />
            <x-form-error-input for="email" />
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="password" name="password" id="floating_password" placeholder=" " required />
            <x-form-input-label for="floating_password" title="Password" />
            <x-form-error-input for="password" />
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <x-form-input type="password" name="password_confirmation" id="floating_confirm_password" placeholder=" " required />
            <x-form-input-label for="floating_confirm_password" title="confirm password" />
            <x-form-error-input for="confirm_password" />
        </div>


        <x-button type="submit" class="cursor-pointer bg-gray-800 text-white">
            Register
        </x-button>

    </form>

</x-layout>