@extends('Layouts.layout1')

@section('title', 'Create Review | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Create Review</h1>

<form action="{{ route('reviews.store') }}" method="POST">
    @csrf

    <div class="mb-2">
        <label>User</label>
        <select name="user_id" class="border p-2 w-full" required>
            <option value="">-- Select User --</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Product</label>
        <select name="product_id" class="border p-2 w-full" required>
            <option value="">-- Select Product --</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Rating</label>
        <input type="number" name="rating" min="1" max="5" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Comment</label>
        <textarea name="comment" class="border p-2 w-full"></textarea>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
</form>
@endsection
