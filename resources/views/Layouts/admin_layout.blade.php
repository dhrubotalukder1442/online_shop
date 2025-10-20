<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Online Shop')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for dropdown toggle -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        .fade-in-up { animation: fadeInUp 0.6s ease-out forwards; }
        .slide-in { animation: slideIn 0.5s ease-out forwards; }
        .product-card { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1), 0 10px 10px -5px rgba(0,0,0,0.04);
        }
        .category-card { transition: all 0.3s ease; }
        .category-card:hover { transform: scale(1.05); }
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after { width: 100%; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .hero-gradient { background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%); }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .floating { animation: float 3s ease-in-out infinite; }
        .badge-pulse { animation: pulse 2s infinite; }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-sans text-gray-900">

    <!-- Navbar -->
    <nav class="gradient-bg text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="{{ url('http://127.0.0.1:8000/products') }}" class="font-bold text-2xl tracking-tight flex items-center space-x-2">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                    <span>ShopHub</span>
                </a>

                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('products.index') }}" class="nav-link hover:text-purple-200">Products</a>
                    <a href="{{ route('categories.index') }}" class="nav-link hover:text-purple-200">Categories</a>
                    <a href="{{ route('tags.index') }}" class="nav-link hover:text-purple-200">Tags</a>
                    <a href="{{ route('orders.index') }}" class="nav-link hover:text-purple-200">Orders</a>
                    <a href="{{ route('reviews.index') }}" class="nav-link hover:text-purple-200">Reviews</a>
                </div>

                <!-- Admin Dropdown -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex items-center space-x-2 bg-white text-indigo-700 px-4 py-2 rounded-md font-semibold hover:bg-indigo-50 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5.121 17.804A13.937 13.937 0 0112 15c2.39 0 4.64.563 6.879 1.804M12 15a3 3 0 100-6 3 3 0 000 6zm0 0v1m0-8V6m0 12v2m-9-6h2m12 0h2"/>
                        </svg>
                        <span>Admin</span>
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.away="open = false"
                         class="absolute right-0 mt-2 w-40 bg-white text-gray-800 rounded-md shadow-lg py-2">
                        <a href="#" class="block px-4 py-2 hover:bg-indigo-100">Profile</a>
                        <form method="POST" action="{{ route('logout.confirm') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 hover:bg-indigo-100">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 mt-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="font-bold text-xl mb-4">ShopHub</h3>
                    <p class="text-gray-400">Your one-stop shop for everything amazing.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Contact</a></li>
                        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Electronics</a></li>
                        <li><a href="#" class="hover:text-white transition">Fashion</a></li>
                        <li><a href="#" class="hover:text-white transition">Home & Living</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-3">Subscribe for exclusive deals</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email"
                               class="px-4 py-2 rounded-l-lg text-gray-900 w-full focus:outline-none">
                        <button class="bg-purple-600 px-4 py-2 rounded-r-lg hover:bg-purple-700 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 ShopHub. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
