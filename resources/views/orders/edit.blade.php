@extends('Layouts.layout1')

@section('title', 'Edit Order | Online Shop')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Order</h1>

<form action="{{ route('orders.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-2">
        <label>User</label>
        <select name="user_id" class="border p-2 w-full" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-2">
        <label>Total Amount</label>
        <input type="number" name="total_amount" value="{{ $order->total_amount }}" step="0.01" class="border p-2 w-full" required>
    </div>

    <div class="mb-2">
        <label>Status</label>
        <select name="status" class="border p-2 w-full" required>
            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="canceled" {{ $order->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
        </select>
    </div>

    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
