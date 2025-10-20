@extends('layouts.home_layout')

@section('content')
<div class="text-center bg-white p-10 rounded-xl shadow-lg max-w-md w-full">
    <h2 class="text-4xl font-bold text-indigo-700 mb-4">Welcome to ShopHub</h2>
    <p class="text-gray-600 text-lg mb-6">
        Shop smart, fast, and easy from our amazing collection.
    </p>

    <a href="{{ route('select.role') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg shadow hover:bg-indigo-700">
        Login / Register
    </a>
</div>
@endsection
