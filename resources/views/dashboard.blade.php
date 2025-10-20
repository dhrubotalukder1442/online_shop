@extends('layouts.admin_layout')

@section('content')
<div class="bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-semibold text-indigo-700 mb-4">Welcome, Admin!</h2>
    <p class="text-gray-700">
        Manage your products, categories, orders, and reviews from the navigation above.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <div class="bg-indigo-100 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-indigo-700">Products</h3>
            <p class="text-gray-600">Add, edit, and manage your products.</p>
        </div>

        <div class="bg-indigo-100 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-indigo-700">Categories</h3>
            <p class="text-gray-600">Organize products into categories.</p>
        </div>

        <div class="bg-indigo-100 p-4 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-indigo-700">Orders</h3>
            <p class="text-gray-600">Track customer orders and order items.</p>
        </div>
    </div>
</div>
@endsection
