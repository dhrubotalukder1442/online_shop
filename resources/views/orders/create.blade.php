@extends('Layouts.layout1')

@section('title', isset($order) ? 'Edit Order' : 'Create Order')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ isset($order) ? 'Edit Order' : 'Create Order' }}</h1>

<form action="{{ isset($order) ? route('orders.update', $order->id) : route('orders.store') }}" method="POST">
    @csrf
    @if(isset($order)) @method('PUT') @endif

    <div class="mb-2">
        <label>User</label>
        <select name="user_id" class="border p-2 w-full" required>
            <option value="">-- Select User --</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ isset($order) && $order->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Total Amount</label>
        <input type="number" name="total_amount" value="{{ old('total_amount', $order->total_amount ?? '') }}" step="0.01" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Status</label>
        <select name="status" class="border p-2 w-full" required>
            <option value="pending" {{ isset($
