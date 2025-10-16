@extends('Layouts.layout1')

@section('title', 'Edit Order Item | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Order Item</h1>

<form action="{{ route('order-items.update', $item->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>Order</label>
        <select name="order_id" class="border p-2 w-full" required>
            @foreach($orders as $order)
                <option value="{{ $order->id }}" {{ $item->order_id == $order->id ? 'selected' : '' }}>{{ $order->id }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Product</label>
        <select name="product_id" class="border p-2 w-full" required>
            @foreach($products as $product)
                <option value="{{ $product->id }}" {{ $item->product_id == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Quantity</label>
        <input type="number" name="quantity" value="{{ $item->quantity }}" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Price</label>
        <input type="number" name="price" value="{{ $item->price }}" step="0.01" class="border p-2 w-full" required>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
