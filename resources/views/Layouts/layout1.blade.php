<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Online Shop')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-900">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4 mb-6">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('products.index') }}" class="font-bold text-lg">Online Shop</a>
            <div class="space-x-4">
                <a href="{{ route('products.index') }}" class="hover:underline">Products</a>
                <a href="{{ route('categories.index') }}" class="hover:underline">Categories</a>
                <a href="{{ route('tags.index') }}" class="hover:underline">Tags</a>
                <a href="{{ route('orders.index') }}" class="hover:underline">Orders</a>
                <a href="{{ route('reviews.index') }}" class="hover:underline">Reviews</a>
            </div>
        </div>
    </nav>

    <!-- Flash messages -->
    <div class="container mx-auto px-4">
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-200 text-red-800 p-2 mb-4 rounded">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <!-- Main content -->
    <main class="container mx-auto px-4">
        @yield('content')
    </main>

</body>
</html>
