@extends('Layouts.layout1')

@section('title', 'Edit Tag | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Tag</h1>

<form action="{{ route('tags.update', $tag->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $tag->name) }}" class="border p-2 w-full" required>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
