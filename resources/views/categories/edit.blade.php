@extends('Layouts.layout1')

@section('title', 'Edit Category | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Category</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $category->name) }}" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Description</label>
        <textarea name="description" class="border p-2 w-full">{{ old('description', $category->description) }}</textarea>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
