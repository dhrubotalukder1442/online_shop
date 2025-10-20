@extends('Layouts.layout1')

@section('title', 'Create Product | Online Shop')

@section('content')

<h1 class="text-2xl font-bold mb-4">Create Product</h1>

@if(session('success'))
    <div class="mb-4 p-3 text-green-800 bg-green-200 rounded" id="success-message">
        {{ session('success') }}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('form').reset();
            $('#tags').val(null).trigger('change');
        });
    </script>
@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-2">
        <label for="category_name" class="block font-semibold">Category</label>
        <input id="category_name" type="text" name="category_name" value="{{ old('category_name') }}" class="border p-2 w-full rounded" required>
        @error('category_name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div class="mb-2">
        <label for="name" class="block font-semibold">Product Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full rounded" required>
        @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div class="mb-2">
        <label for="description" class="block font-semibold">Description</label>
        <textarea id="description" name="description" class="border p-2 w-full rounded">{{ old('description') }}</textarea>
    </div>

    <div class="mb-2">
        <label for="price" class="block font-semibold">Price</label>
        <input id="price" type="number" name="price" value="{{ old('price') }}" step="0.01" class="border p-2 w-full rounded" required>
        @error('price') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
    </div>

    <div class="mb-2">
        <label for="tags" class="block font-semibold">Tags</label>
        <select name="tags[]" id="tags" multiple class="border p-2 w-full rounded">
            @foreach($tags as $id => $tag)
                <option value="{{ $id }}" {{ (collect(old('tags'))->contains($id)) ? 'selected':'' }}>
                    {{ $tag }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label for="image" class="block font-semibold">Product Image</label>
        <input id="image" type="file" name="image" accept="image/*" class="border p-2 w-full rounded">
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-3 hover:bg-blue-600">
        Create
    </button>
</form>

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
