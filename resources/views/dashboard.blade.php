@extends('layouts.admin_layout')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-semibold text-indigo-700 mb-4">Hello, Admin! 👋</h2>
    <p class="text-gray-700">
        Monitor and manage your store efficiently. Stay on top of products, orders, and customer reviews
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

        <!-- ✅ Products Card -->
        <div class="bg-indigo-100 p-4 rounded-lg shadow hover:shadow-lg transition text-center">
            <h1 class="text-lg font-semibold text-indigo-700 mb-1">Products</h1>
            <p>All the products available in your store...</p>
            <p>Stay on top of your inventory and updates.</p>
            <div class="bg-indigo-600 text-white inline-block px-4 py-2 rounded-lg font-bold text-xl mt-2">
                Total: {{ $totalProducts ?? 0 }}
            </div>
        </div>

        <!-- ✅ Categories Card -->
        <div class="bg-indigo-100 p-4 rounded-lg shadow hover:shadow-lg transition text-center">
            <h1 class="text-lg font-semibold text-indigo-700 mb-1">Categories</h1>
            <p>Organize your products efficiently</p>
            <p>Monitor all available product categories.</p>
            <div class="bg-indigo-600 text-white inline-block px-4 py-2 rounded-lg font-bold text-xl mt-2">
                Total: {{ $totalCategories ?? 0 }}
            </div>
        </div>

        <!-- ✅ Orders Card (Modified) -->
        <div class="bg-indigo-100 p-4 rounded-lg shadow hover:shadow-lg transition text-center">
            <h1 class="text-lg font-semibold text-indigo-700 mb-1">Orders</h1>
            <p>Stay on top of your orders and deliveries</p>
            <p>Manage all incoming and customer satisfaction</p>

            <div class="bg-indigo-600 text-white inline-block px-4 py-2 rounded-lg font-bold text-xl mt-2">
                Total: {{ $totalOrders ?? 0 }}
            </div>
        </div>

    </div>
</div>
@endsection
