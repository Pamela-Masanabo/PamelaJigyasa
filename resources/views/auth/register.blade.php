<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="text-2xl font-bold mb-6 text-center" >{{_('Register')}}</h1>
         

        <!-- socilites -->
        <div class="grid gap-4 mb-6">
                    <a href="{{ route('auth.google') }}"
                    class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-full text-red-600 hover:bg-gray-100">
                    <i class="fa-brands fa-google mr-3"></i>
                        {{ __('Continue with Google') }}
                    </a>
      
                    <a href="{{ route('auth.facebook') }}"
                    class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-full text-blue-600 hover:bg-gray-100">
                                 <i class="fa-brands fa-facebook mr-3" ></i> 
                        {{ __('Continue with Facebook') }}
                    </a>
                </div>
            <!-- assigning the role to user-->
            <div class="mb-3">

                    <span>
                        <input class="form-check-input" type="radio" name="role" id="customer" value="customer" required>
                        <label class="form-check-label" for="customer">Customer</label>
                    </span>
                    <span class="mx-5">
                        <input class="form-check-input" type="radio" name="role" id="freelancer" value="freelancer" required>
                        <label class="form-check-label" for="freelancer">Freelancer</label>
                    </span>
                </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          
            <div class="flex items-center justify-between mt-4">
    <x-primary-button class="ms-4">
        {{ __('Register') }}
    </x-primary-button>

    <div class="flex items-center">
        <span class="text-sm text-gray-750 dark:text-gray-400">Already Registered?</span>
        &nbsp;
        <a class="underline text-sm text-gray-750 dark:text-gray-750 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Log In') }}
        </a>
    </div>
</div>

    </form>
</x-guest-layout>