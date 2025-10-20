@extends('Layouts.layout1')

@section('title', 'Create Product | Online Shop')

@section('content')

<h1 class="text-2xl font-bold mb-4">Create Product</h1>

{{-- Success Message --}}
@if(session('success'))
    <div class="mb-4 p-3 text-green-800 bg-green-200 rounded">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Category (Text Input) --}}
    <div class="mb-2">
        <label class="block font-semibold">Category</label>
        <input type="text" name="category_name" value="{{ old('category_name') }}" placeholder="Enter category name" class="border p-2 w-full rounded" required>
    </div>

    {{-- Product Name --}}
    <div class="mb-2">
        <label class="block font-semibold">Product Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full rounded" required>
    </div>

    {{-- Description --}}
    <div class="mb-2">
        <label class="block font-semibold">Description</label>
        <textarea name="description" class="border p-2 w-full rounded">{{ old('description') }}</textarea>
    </div>

    {{-- Price --}}
    <div class="mb-2">
        <label class="block font-semibold">Price</label>
        <input type="number" name="price" value="{{ old('price') }}" step="0.01" class="border p-2 w-full rounded" required>
    </div>

    {{-- Tags --}}
    <div class="mb-2">
        <label class="block font-semibold">Tags</label>
        <select name="tags[]" id="tags" multiple class="border p-2 w-full rounded">
            @foreach($tags as $tag)
                <option value="{{ $tag }}" {{ (collect(old('tags'))->contains($tag)) ? 'selected':'' }}>
                    {{ $tag }}
                </option>
            @endforeach
        </select>
    </div>

    {{-- Product Image --}}
    <div class="mb-2">
        <label class="block font-semibold">Product Image</label>
        <input type="file" name="image" accept="image/*" class="border p-2 w-full rounded">
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-3 hover:bg-blue-600">
        Create
    </button>
</form>

{{-- Optional: make tags searchable --}}
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tags').select2({
            placeholder: 'Select product tags',
            allowClear: true
        });
    });
</script>

@endsection
