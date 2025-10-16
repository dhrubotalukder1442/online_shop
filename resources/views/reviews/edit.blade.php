@extends('Layouts.layout1')

@section('title', 'Edit Review | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Review</h1>

<form action="{{ route('reviews.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>User</label>
        <select name="user_id" class="border p-2 w-full" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $review->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Product</label>
        <select name="product_id" class="border p-2 w-full" required>
            @foreach($products as $product)
                <option value="{{ $product->id }}" {{ $review->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Rating</label>
        <input type="number" name="rating" min="1" max="5" value="{{ $review->rating }}" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Comment</label>
        <textarea name="comment" class="border p-2 w-full">{{ $review->comment }}</textarea>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
