<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user','product'])->get();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('reviews.create', compact('users','products'));
    }

    public function store(Request $request)
    {
        Review::create($request->only(['user_id','product_id','rating','comment']));
        return redirect()->route('reviews.index');
    }

    public function edit(Review $review)
    {
        $users = User::all();
        $products = Product::all();
        return view('reviews.edit', compact('review','users','products'));
    }

    public function update(Request $request, Review $review)
    {
        $review->update($request->only(['user_id','product_id','rating','comment']));
        return redirect()->route('reviews.index');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
