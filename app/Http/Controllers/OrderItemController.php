<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    public function index()
    {
        $orderItems = OrderItem::with(['order','product'])->get();
        return view('order-items.index', compact('orderItems'));
    }

    public function create()
    {
        $orders = Order::all();
        $products = Product::all();
        return view('order-items.create', compact('orders','products'));
    }

    public function store(Request $request)
    {
        OrderItem::create($request->only(['order_id','product_id','quantity','price']));
        return redirect()->route('order-items.index');
    }

    public function edit(OrderItem $orderItem)
    {
        $orders = Order::all();
        $products = Product::all();
        return view('order-items.edit', compact('orderItem','orders','products'));
    }

    public function update(Request $request, OrderItem $orderItem)
    {
        $orderItem->update($request->only(['order_id','product_id','quantity','price']));
        return redirect()->route('order-items.index');
    }

    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();
        return redirect()->route('order-items.index');
    }
}
