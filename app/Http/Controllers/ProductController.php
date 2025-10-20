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
        $tags = ['Electronics', 'Clothing', 'Beauty & Health', 'Books', 'Home & Kitchen'];
    return view('products.create', compact('tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'category_id' => 'required|exists:categories,id',
        'tags' => 'array',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('products', 'public');
        $validated['image'] = $path;
    }

    $product = Product::create($validated);

    if ($request->has('tags')) {
        $product->tags()->attach($request->tags);
    }

    return redirect()->route('products.index')->with('success', 'Product created successfully!');
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

    public function uploadImage(Request $request, $id)
{
    $request->validate([
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $product = Product::findOrFail($id);

    // Store the uploaded file
    $path = $request->file('image')->store('products', 'public');

    // Update product record
    $product->image = $path;
    $product->save();

    // Return JSON for AJAX
    return response()->json([
        'success' => true,
        'image_url' => asset('storage/' . $path),
    ]);
}
public function show($id)
{
    $product = Product::findOrFail($id);
    return view('products.show', compact('product'));
}


}
