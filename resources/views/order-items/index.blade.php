@extends('Layouts.layout1')

@section('title', 'Order Items | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Order Items</h1>

<a href="{{ route('order-items.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Order Item</a>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="border px-2 py-1">ID</th>
            <th class="border px-2 py-1">Order ID</th>
            <th class="border px-2 py-1">Product</th>
            <th class="border px-2 py-1">Quantity</th>
            <th class="border px-2 py-1">Price</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orderItems as $item)
        <tr>
            <td class="border px-2 py-1">{{ $item->id }}</td>
            <td class="border px-2 py-1">{{ $item->order->id ?? '-' }}</td>
            <td class="border px-2 py-1">{{ $item->product->name ?? '-' }}</td>
            <td class="border px-2 py-1">{{ $item->quantity }}</td>
            <td class="border px-2 py-1">${{ $item->price }}</td>
            <td class="border px-2 py-1">
                <a href="{{ route('order-items.edit', $item->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('order-items.destroy', $item->id) }}" method="POST" class="inline-block">
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
