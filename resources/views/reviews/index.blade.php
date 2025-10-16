@extends('Layouts.layout1')

@section('title', 'Reviews | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Reviews</h1>

<a href="{{ route('reviews.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Review</a>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="border px-2 py-1">ID</th>
            <th class="border px-2 py-1">User</th>
            <th class="border px-2 py-1">Product</th>
            <th class="border px-2 py-1">Rating</th>
            <th class="border px-2 py-1">Comment</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reviews as $review)
        <tr>
            <td class="border px-2 py-1">{{ $review->id }}</td>
            <td class="border px-2 py-1">{{ $review->user->name ?? '-' }}</td>
            <td class="border px-2 py-1">{{ $review->product->name ?? '-' }}</td>
            <td class="border px-2 py-1">{{ $review->rating }}</td>
            <td class="border px-2 py-1">{{ $review->comment }}</td>
            <td class="border px-2 py-1">
                <a href="{{ route('reviews.edit', $review->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="inline-block">
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
