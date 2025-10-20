@extends('Layouts.layout1')

@section('title', 'Products | Online Shop')

@section('content')
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        {{-- Header --}}
        <div class="flex justify-between items-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Products</h1>
            <a href="{{ route('products.create') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow-md transition">
               + Add Product
            </a>
        </div>

        {{-- Example Product Data --}}
        @php
            $products = [
                ['id' => 1, 'name' => 'Smartphone', 'price' => 699.99, 'tags' => ['Electronics'], 'image' => 'smartphone.jpg'],
                ['id' => 2, 'name' => 'Headphones', 'price' => 59.99, 'tags' => ['Electronics'], 'image' => 'headphones.jpg'],
                ['id' => 3, 'name' => 'T-Shirt', 'price' => 19.99, 'tags' => ['Clothing'], 'image' => 'tshirt.jpg'],
                ['id' => 4, 'name' => 'Lipstick', 'price' => 9.99, 'tags' => ['Beauty & Health'], 'image' => 'lipstick.jpg'],
                ['id' => 5, 'name' => 'Fiction Book', 'price' => 14.99, 'tags' => ['Books'], 'image' => 'book.jpg'],
                ['id' => 6, 'name' => 'Blender', 'price' => 49.99, 'tags' => ['Home & Kitchen'], 'image' => 'blender.jpg'],
            ];

            $grouped = collect($products)->groupBy(fn($p) => $p['tags'][0]);
            $order = ['Electronics', 'Clothing', 'Beauty & Health', 'Books', 'Home & Kitchen'];
            $sorted = collect($order)
                        ->mapWithKeys(fn($cat) => [$cat => $grouped->get($cat, collect())])
                        ->filter(fn($items) => $items->isNotEmpty());
        @endphp

        {{-- Display grouped products --}}
        @foreach($sorted as $category => $items)
            <div class="mb-16">
                <div class="flex justify-between items-center mb-6 border-b-2 border-indigo-200 pb-2">
                    <h2 class="text-2xl font-bold text-indigo-700">{{ $category }}</h2>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
                    @foreach($items as $product)
                        <div class="group bg-white rounded-xl shadow-md hover:shadow-xl transform hover:-translate-y-1 transition-all p-4 flex flex-col items-center">

                            {{-- Product Image --}}
                            <div class="w-28 h-28 bg-gray-100 rounded-full flex items-center justify-center overflow-hidden mb-4">
                                @if(!empty($product['image']))
                                    <img src="{{ asset('storage/products/' . $product['image']) }}"
                                         alt="{{ $product['name'] }}"
                                         class="object-cover w-full h-full">
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-16 w-16 text-gray-400"
                                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 7h18M3 12h18M3 17h18" />
                                    </svg>
                                @endif
                            </div>

                            {{-- Upload Image Form --}}
                            <form action="{{ route('products.uploadimage', $product['id']) }}"
                                  method="POST" enctype="multipart/form-data"
                                  class="flex flex-col items-center mb-3">
                                @csrf
                                <label class="cursor-pointer bg-gray-200 hover:bg-indigo-100 text-gray-700 text-xs font-semibold px-3 py-1 rounded-md transition">
                                    📷 Upload
                                    <input type="file" name="image" class="hidden" onchange="this.form.submit()">
                                </label>
                            </form>

                            {{-- Product Info --}}
                            <h3 class="text-lg font-semibold text-gray-900 text-center group-hover:text-indigo-600 transition">
                                {{ $product['name'] }}
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">${{ number_format($product['price'], 2) }}</p>

                            {{-- ✅ Details Button --}}
                            <a href="{{ route('products.show', $product['id']) }}"
                               class="mt-3 bg-green-600 hover:bg-green-700 text-white text-sm px-4 py-2 rounded-md shadow transition">
                               Details
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
