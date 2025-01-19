<?php
use Illuminate\Support\Facades\Route;
?>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="text-2xl font-bold text-center mb-6">{{ __('Login') }}</h1>
        
        <!-- Social Login Buttons -->
        <div class="grid gap-4 mb-6">
            <a href="{{ route('auth.google') }}" 
               class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-full text-red-600 hover:bg-gray-100">
                <i class="fab fa-google mr-3"></i>
                {{ __('Continue with Google') }}
            </a>
            <a href="{{ route('auth.facebook') }}" 
               class="flex items-center justify-center  px-4 py-2 border border-gray-300 rounded-full text-blue-600 hover:bg-gray-100">
                <i class="fab fa-facebook-f mr-3"></i>
                {{ __('Continue with Facebook') }}
            </a>
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1 rounded-full" 
                          type="email" name="email" :value="old('email')" 
                          required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block w-full mt-1 rounded-full"
                          type="password" name="password" 
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

<!-- Remember Me -->
<div class="flex items-center justify-between mb-4">
    <div class="flex items-center">
        <input id="remember_me" type="checkbox" 
               class="rounded-full border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" 
               name="remember">
        <label for="remember_me" class="ml-2 text-sm text-gray-600">
            {{ __('Remember me') }}
        </label>
    </div>

    <!-- Actions -->
    <div class="flex items-center">
        @if (Route::has('password.request'))
            <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
    </div>
</div>

<div class="flex items-center justify-between">
    <!-- Log In Button -->
    <x-primary-button class="rounded-full">
        {{ __('Log in') }}
    </x-primary-button>
    
    <!-- Don't have an account? text and Register link -->
    <div class="flex items-center">
        <span class="text-sm text-gray-750 dark:text-gray-400">Don't have an account?</span>
        &nbsp;
        <a class="underline text-sm text-gray-750 dark:text-gray-750 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
            {{ __('Register') }}
        </a>
    </div>
</div>

    </form>
</x-guest-layout>