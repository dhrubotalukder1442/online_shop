@extends('Layouts.layout1')

@section('title', 'Create Tag | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Create Tag</h1>

<form action="{{ route('tags.store') }}" method="POST">
    @csrf
    <div class="mb-2">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full" required>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
</form>
@endsection
