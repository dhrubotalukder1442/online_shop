@extends('Layouts.layout1')

@section('title', 'Create Order Item | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Create Order Item</h1>

<form action="{{ route('order-items.store') }}" method="POST">
    @csrf

    <div class="mb-2">
        <label>Order</label>
        <select name="order_id" class="border p-2 w-full" required>
            <option value="">-- Select Order --</option>
            @foreach($orders as $order)
                <option value="{{ $order->id }}">{{ $order->id }}</option>
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
        <label>Quantity</label>
        <input type="number" name="quantity" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Price</label>
        <input type="number" name="price" step="0.01" class="border p-2 w-full" required>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
</form>
@endsection
