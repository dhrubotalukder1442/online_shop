@extends('Layouts.guest')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-10">
        <h2 class="text-3xl font-bold text-center text-indigo-600 mb-8">Create a New Account</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-6">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    class="block mt-2 w-full border-2 border-gray-300 rounded-lg shadow-sm px-4 py-3 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                    type="text"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="block mt-2 w-full border-2 border-gray-300 rounded-lg shadow-sm px-4 py-3 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autocomplete="username"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input
                    id="password"
                    class="block mt-2 w-full border-2 border-gray-300 rounded-lg shadow-sm px-4 py-3 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                    type="password"
                    name="password"
                    required
                    autocomplete="new-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input
                    id="password_confirmation"
                    class="block mt-2 w-full border-2 border-gray-300 rounded-lg shadow-sm px-4 py-3 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-200"
                    type="password"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-between mt-6">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}"
                       class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md w-32 text-center transition">
                        {{ __('Login') }}
                    </a>
                @endif

                <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md w-32 text-center transition">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
