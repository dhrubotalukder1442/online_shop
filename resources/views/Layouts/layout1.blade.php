<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Online Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .slide-in {
            animation: slideIn 0.5s ease-out forwards;
        }

        .product-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .category-card {
            transition: all 0.3s ease;
        }

        .category-card:hover {
            transform: scale(1.05);
        }

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

        .nav-link:hover::after {
            width: 100%;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        .badge-pulse {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-sans text-gray-900">

    <!-- Navbar -->
    <nav class="gradient-bg text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="font-bold text-2xl tracking-tight flex items-center space-x-2">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                    </svg>
                    <span>ShopHub</span>
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="nav-link hover:text-purple-200">Products</a>
                    <a href="#" class="nav-link hover:text-purple-200">Categories</a>
                    <a href="#" class="nav-link hover:text-purple-200">Tags</a>
                    <a href="#" class="nav-link hover:text-purple-200">Orders</a>
                    <a href="#" class="nav-link hover:text-purple-200">Reviews</a>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="relative hover:text-purple-200 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-pink-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center badge-pulse">3</span>
                    </button>
                    <button class="md:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-20 mb-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0 fade-in-up">
                    <h1 class="text-5xl md:text-6xl font-bold mb-4 leading-tight">
                        Discover Amazing Products
                    </h1>
                    <p class="text-xl mb-6 text-purple-100">
                        Shop the latest trends with exclusive deals and fast delivery
                    </p>
                    <div class="flex space-x-4">
                        <button class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-purple-50 transition transform hover:scale-105 shadow-lg">
                            Shop Now
                        </button>
                        <button class="border-2 border-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-purple-600 transition">
                            Learn More
                        </button>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="floating">
                        <svg class="w-64 h-64" viewBox="0 0 200 200" fill="none">
                            <circle cx="100" cy="100" r="80" fill="rgba(255,255,255,0.2)"/>
                            <path d="M100 40 L130 70 L160 40 L170 100 L140 130 L170 160 L100 150 L30 160 L60 130 L30 100 L40 40 L70 70 Z" fill="white" opacity="0.9"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Flash Messages -->
    <div class="container mx-auto px-6 mb-6">
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-r shadow-md slide-in" role="alert">
            <p class="font-medium">Success!</p>
            <p>Your item has been added to cart</p>
        </div>
    </div>

    <!-- Categories Section -->
    <section class="container mx-auto px-6 mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center">Shop by Category</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="category-card bg-white rounded-xl shadow-md p-6 text-center cursor-pointer hover:shadow-xl">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg">Electronics</h3>
            </div>
            <div class="category-card bg-white rounded-xl shadow-md p-6 text-center cursor-pointer hover:shadow-xl">
                <div class="bg-pink-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg">Fashion</h3>
            </div>
            <div class="category-card bg-white rounded-xl shadow-md p-6 text-center cursor-pointer hover:shadow-xl">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg">Home</h3>
            </div>
            <div class="category-card bg-white rounded-xl shadow-md p-6 text-center cursor-pointer hover:shadow-xl">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h3 class="font-semibold text-lg">Books</h3>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="container mx-auto px-6 mb-16">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold">Featured Products</h2>
            <a href="#" class="text-purple-600 hover:text-purple-700 font-semibold flex items-center">
                View All
                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            <div class="product-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
                <div class="relative">
                    <div class="bg-gradient-to-br from-purple-400 to-pink-400 h-48 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3z"/>
                        </svg>
                    </div>
                    <span class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">-20%</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Premium Headphones</h3>
                    <p class="text-gray-600 text-sm mb-3">Wireless noise-canceling</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-purple-600">$79</span>
                            <span class="text-sm text-gray-400 line-through ml-2">$99</span>
                        </div>
                        <button class="bg-purple-600 text-white p-2 rounded-full hover:bg-purple-700 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-400 to-cyan-400 h-48 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <span class="absolute top-2 right-2 bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Smart Watch</h3>
                    <p class="text-gray-600 text-sm mb-3">Fitness tracker & more</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-purple-600">$149</span>
                        </div>
                        <button class="bg-purple-600 text-white p-2 rounded-full hover:bg-purple-700 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
                <div class="relative">
                    <div class="bg-gradient-to-br from-green-400 to-teal-400 h-48 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 100 4v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 100-4V6z"/>
                        </svg>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Designer Backpack</h3>
                    <p class="text-gray-600 text-sm mb-3">Durable & stylish</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-purple-600">$59</span>
                        </div>
                        <button class="bg-purple-600 text-white p-2 rounded-full hover:bg-purple-700 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
                <div class="relative">
                    <div class="bg-gradient-to-br from-orange-400 to-red-400 h-48 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                        </svg>
                    </div>
                    <span class="absolute top-2 right-2 bg-purple-500 text-white text-xs px-2 py-1 rounded-full">Hot</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Online Course Bundle</h3>
                    <p class="text-gray-600 text-sm mb-3">Learn new skills</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-2xl font-bold text-purple-600">$29</span>
                        </div>
                        <button class="bg-purple-600 text-white p-2 rounded-full hover:bg-purple-700 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
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
                        <input type="email" placeholder="Your email" class="px-4 py-2 rounded-l-lg text-gray-900 w-full focus:outline-none">
                        <button class="bg-purple-600 px-4 py-2 rounded-r-lg hover:bg-purple-700 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
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
