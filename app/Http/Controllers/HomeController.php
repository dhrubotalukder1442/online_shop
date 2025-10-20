<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class HomeController extends Controller
{
    // Show homepage
    public function index()
    {
        return view('home');
    }

    // Show role selection page
    public function selectRole()
    {
        return view('select-role');
    }

    // Handle role selection and redirect to login
    public function redirectToLogin(Request $request)
    {
        $request->validate([
            'role' => 'required|in:user,admin',
        ]);

        // Store the selected role in session (optional)
        session(['role' => $request->role]);

        // Redirect to login page
        return redirect()->route('login');
    }
     public function index1()
    {
        // ✅ Total counts for product and category
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalOrders = Order::count(); // ✅ New

        // ✅ Pass to dashboard
        return view('dashboard', compact('totalProducts', 'totalCategories', 'totalOrders'));
    }


}
