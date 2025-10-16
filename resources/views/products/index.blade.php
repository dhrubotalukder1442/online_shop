@extends('Layouts.layout1')

@section('title', 'Products | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Products</h1>

<a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Product</a>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="border px-2 py-1">ID</th>
            <th class="border px-2 py-1">Name</th>
            <th class="border px-2 py-1">Category</th>
            <th class="border px-2 py-1">Price</th>
            <th class="border px-2 py-1">Tags</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td class="border px-2 py-1">{{ $product->id }}</td>
            <td class="border px-2 py-1">{{ $product->name }}</td>
            <td class="border px-2 py-1">{{ $product->category->name ?? '-' }}</td>
            <td class="border px-2 py-1">${{ $product->price }}</td>
            <td class="border px-2 py-1">
                @foreach($product->tags as $tag)
                    <span class="bg-gray-200 px-2 py-1 rounded mr-1">{{ $tag->name }}</span>
                @endforeach
            </td>
            <td class="border px-2 py-1">
                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 ml-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
