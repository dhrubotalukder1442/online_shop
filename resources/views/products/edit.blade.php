@extends('Layouts.layout1')

@section('title', 'Edit Product | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Description</label>
        <textarea name="description" class="border p-2 w-full">{{ old('description', $product->description) }}</textarea>
    </div>

    <div class="mb-2">
        <label>Price</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" step="0.01" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Category</label>
        <select name="category_id" class="border p-2 w-full" required>
            <option value="">-- Select Category --</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Tags</label>
        <select name="tags[]" multiple class="border p-2 w-full">
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}" {{ $product->tags->contains($tag->id) ? 'selected' : '' }}>
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
