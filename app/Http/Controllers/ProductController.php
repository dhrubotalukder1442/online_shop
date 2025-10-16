<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['category','tags'])->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('products.create', compact('categories','tags'));
    }

    public function store(Request $request)
    {
        $product = Product::create($request->only(['name','description','price','category_id']));
        if($request->tags){
            $product->tags()->attach($request->tags);
        }
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('products.edit', compact('product','categories','tags'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->only(['name','description','price','category_id']));
        $product->tags()->sync($request->tags ?? []);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->tags()->detach();
        $product->delete();
        return redirect()->route('products.index');
    }
}
