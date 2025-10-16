<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $users = User::all();
        return view('orders.create', compact('users'));
    }

    public function store(Request $request)
    {
        Order::create($request->only(['user_id','total_amount','status']));
        return redirect()->route('orders.index');
    }

    public function edit(Order $order)
    {
        $users = User::all();
        return view('orders.edit', compact('order','users'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->only(['user_id','total_amount','status']));
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
