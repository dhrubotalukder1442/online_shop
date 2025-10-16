@extends('Layouts.layout1')

@section('title', 'Categories | Online Shop')

@section('content')
<section class="py-16 text-center bg-gray-50">
    <h1 class="text-5xl md:text-6xl font-bold mb-12 text-indigo-600 animate-pulse">Shop by Category</h1>

    {{-- Animated Big Icon Buttons --}}
    <div class="flex flex-wrap justify-center gap-10">
        <!-- Electronics -->
        <a href="{{ route('categories.show', 1) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-bounce p-3 bg-indigo-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 21h6l-.75-4M6 8h12M6 8a6 6 0 0112 0M6 8l-.75 4h12.5L18 8" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-indigo-700">Electronics</p>
        </a>

        <!-- Clothing -->
        <a href="{{ route('categories.show', 2) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-pulse p-3 bg-pink-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.042 12.042 0 0121 12.75v4.5l-9 5-9-5v-4.5c0-.615.084-1.218.24-1.792L12 14z" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-pink-700">Clothing</p>
        </a>

        <!-- Books -->
        <a href="{{ route('categories.show', 3) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-spin-slow p-3 bg-green-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12V4" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-green-700">Books</p>
        </a>

        <!-- Home & Kitchen -->
        <a href="{{ route('categories.show', 4) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-bounce p-3 bg-yellow-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22V12h6v10" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-yellow-700">Home & Kitchen</p>
        </a>

        <!-- Sports -->
        <a href="{{ route('categories.show', 5) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-bounce p-3 bg-blue-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-blue-700">Sports</p>
        </a>

        <!-- Beauty & Health -->
        <a href="{{ route('categories.show', 6) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-pulse p-3 bg-purple-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c.667 0 1.333.667 1.333 1.333S12.667 10.667 12 10.667 10.667 10 10.667 9.333 11.333 8 12 8z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 21h14l-7-12-7 12z" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-purple-700">Beauty & Health</p>
        </a>

        <!-- Toys & Kids -->
        <a href="{{ route('categories.show', 7) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-bounce p-3 bg-orange-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v18h14V3H5zm7 14l-3-6h6l-3 6z" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-orange-700">Toys & Kids</p>
        </a>

        <!-- Furniture -->
        <a href="{{ route('categories.show', 8) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-bounce p-3 bg-gray-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 20h16v-2H4v2zm0-4h16v-8H4v8z" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-gray-700">Furniture</p>
        </a>

        <!-- Automotive -->
        <a href="{{ route('categories.show', 9) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-pulse p-3 bg-red-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13h2l3-8h8l3 8h2" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-red-700">Automotive</p>
        </a>

        <!-- Jewelry -->
        <a href="{{ route('categories.show', 10) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-bounce p-3 bg-pink-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 2.5-7.5L2 9h7l3-7z" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-pink-700">Jewelry</p>
        </a>

        <!-- Pet Supplies -->
        <a href="{{ route('categories.show', 11) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-pulse p-3 bg-green-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0-6l-3 3m3-3l3 3" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-green-700">Pet Supplies</p>
        </a>

        <!-- Garden & Outdoors -->
        <a href="{{ route('categories.show', 12) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-bounce p-3 bg-lime-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-lime-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 20h16M12 4v16" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-lime-700">Garden & Outdoors</p>
        </a>

        <!-- Office Supplies -->
        <a href="{{ route('categories.show', 13) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-pulse p-3 bg-cyan-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-cyan-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 20h12v-2H6v2zM6 4h12v12H6V4z" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-cyan-700">Office Supplies</p>
        </a>

        <!-- Music & Entertainment -->
        <a href="{{ route('categories.show', 14) }}" class="flex flex-col items-center transform hover:scale-110 transition duration-300">
            <div class="animate-bounce p-3 bg-purple-100 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-2v13M9 19a2 2 0 100-4 2 2 0 000 4zm12-2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <p class="mt-3 text-lg font-semibold text-purple-700">Music & Entertainment</p>
        </a>
    </div>
</section>

{{-- Custom slow spin animation --}}
<style>
    .animate-spin-slow {
        animation: spin 6s linear infinite;
    }
</style>
@endsection
