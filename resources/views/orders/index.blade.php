@extends('Layouts.layout1')

@section('title', 'Orders | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Orders</h1>

<a href="{{ route('orders.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Create Order</a>

<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr class="bg-gray-100">
            <th class="border px-2 py-1">ID</th>
            <th class="border px-2 py-1">User</th>
            <th class="border px-2 py-1">Total Amount</th>
            <th class="border px-2 py-1">Status</th>
            <th class="border px-2 py-1">Created At</th>
            <th class="border px-2 py-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td class="border px-2 py-1">{{ $order->id }}</td>
            <td class="border px-2 py-1">{{ $order->user->name ?? '-' }}</td>
            <td class="border px-2 py-1">${{ $order->total_amount }}</td>
            <td class="border px-2 py-1">{{ $order->status }}</td>
            <td class="border px-2 py-1">{{ $order->created_at->format('Y-m-d') }}</td>
            <td class="border px-2 py-1">
                <a href="{{ route('orders.edit', $order->id) }}" class="text-blue-500">Edit</a>
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="inline-block">
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
