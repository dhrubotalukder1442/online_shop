<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | My Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold text-indigo-600">MyShop</h1>
            <nav>
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-indigo-600 px-3">Home</a>
                <a href="{{ route('select.role') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Login / Register</a>
            </nav>
        </div>
    </header>

    <!-- Page Content -->
    <main class="flex-grow flex items-center justify-center bg-gray-100">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-16">
        <div class="container mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center text-gray-600 text-sm">
            <span>&copy; {{ date('Y') }} MyShop. All rights reserved.</span>
            <div class="flex space-x-4 mt-2 md:mt-0">
                <a href="#" class="hover:text-indigo-600">Facebook</a>
                <a href="#" class="hover:text-indigo-600">Twitter</a>
                <a href="#" class="hover:text-indigo-600">Instagram</a>
            </div>
        </div>
    </footer>

</body>
</html>
