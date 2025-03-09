<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ProductController extends Controller
{
    public function index() {
        $products = Product::with('category')->get();
        return view('dashboard.products.index', compact('products'));
    }

    public function create() {
        $categories = Category::all();
        return view('dashboard.products.create', compact('categories'));
    }

    public function show(Product $product) {
        return view('dashboard.products.show', compact('product'));
    }

    public function store(Request $request) {
        // dd($request->all());
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:products,slug|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            // 'image' => 'required|string|max:255',
        ]);
        if (empty($validated['slug'])) {
            $baseSlug = Str::slug($validated['name']);
            $slug = $baseSlug;
            $count = 0;
    
            while (Product::where('slug', $slug)->exists()) {
                $count++;
                $slug = $baseSlug . '-' . $count; // e.g., "my-product-1"
            }
            $validated['slug'] = $slug;
        }
        Product::create($validated);
        return redirect()->route('products.index')->with('success', 'product added successfully');
    }

    public function update(Request $request, Product $product) {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'string|unique:products,slug|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            // 'image' => 'required|string|max:255',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'product updated successfully');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'product deleted successfully');
    }

    // public function show(Product $product) {

    // }
}