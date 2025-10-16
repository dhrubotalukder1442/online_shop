@extends('Layouts.layout1')

@section('title', 'Tags | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tags</h1>

<a href="{{ route('tags.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Tag</a>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="border px-2 py-1">ID</th>
            <th class="border px-2 py-1">Name</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td class="border px-2 py-1">{{ $tag->id }}</td>
            <td class="border px-2 py-1">{{ $tag->name }}</td>
            <td class="border px-2 py-1">
                <a href="{{ route('tags.edit', $tag->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" class="inline-block">
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
