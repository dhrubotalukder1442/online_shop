@extends('Layouts.layout1')

@section('title', 'Products | Online Shop')

@section('content')
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Products</h1>
            <a href="{{ route('products.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow-md transition">
               + Add Product
            </a>
        </div>

        {{-- Product Grid --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
            {{-- Example Products --}}
            @php
                $products = [
                    ['name' => 'Smartphone', 'price' => 699.99, 'tags' => ['Electronics']],
                    ['name' => 'T-Shirt', 'price' => 19.99, 'tags' => ['Clothing']],
                    ['name' => 'Fiction Book', 'price' => 14.99, 'tags' => ['Books']],
                    ['name' => 'Blender', 'price' => 49.99, 'tags' => ['Home & Kitchen']],
                    ['name' => 'Soccer Ball', 'price' => 24.99, 'tags' => ['Sports']],
                    ['name' => 'Lipstick', 'price' => 9.99, 'tags' => ['Beauty & Health']],
                    ['name' => 'Teddy Bear', 'price' => 29.99, 'tags' => ['Toys & Kids']],
                    ['name' => 'Office Chair', 'price' => 129.99, 'tags' => ['Furniture']],
                    ['name' => 'Car Oil', 'price' => 39.99, 'tags' => ['Automotive']],
                    ['name' => 'Headphones', 'price' => 59.99, 'tags' => ['Electronics']],
                ];
            @endphp

            @foreach($products as $index => $product)
            <a href="#"
               class="group bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all p-4 flex flex-col items-center">

                {{-- Placeholder icon / image --}}
                <div class="w-28 h-28 bg-gray-200 rounded-full flex items-center justify-center overflow-hidden mb-4 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                    </svg>
                </div>

                <h2 class="text-lg font-semibold text-gray-900 text-center group-hover:text-indigo-600 transition">{{ $product['name'] }}</h2>
                <p class="text-sm text-gray-500 mt-1">${{ number_format($product['price'], 2) }}</p>

                {{-- Tags --}}
                <div class="flex flex-wrap justify-center mt-2">
                    @foreach($product['tags'] as $tag)
                        <span class="inline-block bg-indigo-100 text-indigo-700 px-2 py-1 rounded-full text-xs font-semibold mr-1 mb-1">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection
