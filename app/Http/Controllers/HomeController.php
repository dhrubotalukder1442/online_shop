<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
