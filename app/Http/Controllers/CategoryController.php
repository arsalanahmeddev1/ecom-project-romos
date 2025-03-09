<?php


// categories
// categories/create
// categories/1
// categories/1/edit

// categories
// categories/1 <- patch
// categories/1 <- delete

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function create() {
        return view('dashboard.categories.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'string|unique:categories,slug|max:255'
        ]);
        $validated['slug'] = Str::slug($validated['name']);
        Category::create($validated);
        return redirect()->route('dashboard.categories.index')->with('success', 'category added successfully');
    }


}
