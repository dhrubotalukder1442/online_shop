@extends('Layouts.layout1')

@section('title', isset($order) ? 'Edit Order' : 'Create Order')

@section('content')
<div class="max-w-xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6 text-center">{{ isset($order) ? 'Edit Order' : 'Create Order' }}</h1>

    <form action="{{ isset($order) ? route('orders.update', $order->id) : route('orders.store') }}" method="POST">
        @csrf
        @if(isset($order))
            @method('PUT')
        @endif

        <!-- User -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">User</label>
            <select name="user_id" class="border p-2 w-full rounded" required>
                <option value="">-- Select User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ isset($order) && $order->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            @error('user_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Total Amount -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Total Amount</label>
            <input type="number" name="total_amount" value="{{ old('total_amount', $order->total_amount ?? '') }}" step="0.01" class="border p-2 w-full rounded" required>
            @error('total_amount')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Status</label>
            <select name="status" class="border p-2 w-full rounded" required>
                <option value="pending" {{ isset($order) && $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="processing" {{ isset($order) && $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                <option value="completed" {{ isset($order) && $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="cancelled" {{ isset($order) && $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
            @error('status')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Order Date -->
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Order Date</label>
            <input type="date" name="order_date" value="{{ old('order_date', isset($order) ? $order->order_date->format('Y-m-d') : '') }}" class="border p-2 w-full rounded" required>
            @error('order_date')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 transition">
            {{ isset($order) ? 'Update Order' : 'Create Order' }}
        </button>
    </form>
</div>
@endsection
