@extends('Layouts.layout1')

@section('title', $product?->name . ' | Product Details')

@section('content')
<div class="container mx-auto py-16 px-6">
    <div class="bg-white shadow-lg rounded-lg p-6 max-w-2xl mx-auto">
        <img src="{{ asset('storage/' . $product?->image) }}"
             alt="{{ $product?->name }}"
             class="w-64 h-64 object-cover mx-auto rounded-lg mb-6">

        <h1 class="text-3xl font-bold text-gray-800 mb-3 text-center">{{ $product?->name }}</h1>
        <p class="text-lg text-gray-600 mb-2 text-center">${{ number_format($product?->price, 2) }}</p>
        <p class="text-gray-500 mb-6 text-center">{{ $product?->description ?? 'No description available.' }}</p>

        <div class="text-center">
            <a href="{{ route('products.index') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">
               ← Back to Products
            </a>
        </div>
    </div>
</div>
@endsection
