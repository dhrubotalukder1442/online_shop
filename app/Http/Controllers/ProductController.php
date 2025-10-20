<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display all products
    public function index()
    {
        $products = Product::with(['category', 'tags'])->get();
        return view('products.index', compact('products'));
    }

    // Show form to create a new product

     public function create()
    {
        $tags = Tag::pluck('name', 'id'); // Assuming tags have id and name
        return view('products.create', compact('tags'));
    }

public function store(Request $request)
{
    // Validate form input
    $validated = $request->validate([
        'category_name' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'tag' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
    ]);

    // ✅ Create or find category
    $category = Category::where('name', $validated['category_name'])->first();
    if (!$category) {
        $category = Category::create([
            'name' => $validated['category_name'],
        ]);
    }

    // ✅ Handle image upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
    }

    // ✅ Create product using your column names
    Product::create([
        'category_id' => $category->id,
        'product_name' => $validated['name'],
        'description' => $validated['description'],
        'price' => $validated['price'],
        'stock_quantity' => 0,
        'image_url' => $imagePath,
        'tag' => $validated['tag'],
    ]);

    return redirect()->route('products.create')->with('success', '✅ Product added to category: ' . $category->name);
}

    // Show the edit form
    public function edit(Product $products)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('products.edit', compact('product', 'categories', 'tags'));
    }

    // Update an existing product
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer|min:0',
            'tags' => 'array',
        ]);

        $product->update($validated);
        $product->tags()->sync($request->tags ?? []);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Delete a product
    public function destroy(Product $product)
    {
        $product->tags()->detach();
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    // Upload/update product image via AJAX
    public function uploadImage(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $product = Product::findOrFail($id);

        $path = $request->file('image')->store('products', 'public');
        $product->image = $path;
        $product->save();

        return response()->json([
            'success' => true,
            'image_url' => asset('storage/' . $path),
        ]);
    }

    // Show product details
    public function show($id)
    {
        $product = Product::with(['category', 'tags'])->findOrFail($id);
        return view('products.show', compact('product'));
    }
}
