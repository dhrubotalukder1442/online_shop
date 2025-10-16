@extends('Layouts.layout1')

@section('title', 'Categories | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Categories</h1>

<a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Category</a>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="border px-2 py-1">ID</th>
            <th class="border px-2 py-1">Name</th>
            <th class="border px-2 py-1">Description</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td class="border px-2 py-1">{{ $category->id }}</td>
            <td class="border px-2 py-1">{{ $category->name }}</td>
            <td class="border px-2 py-1">{{ $category->description }}</td>
            <td class="border px-2 py-1">
                <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline-block">
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
