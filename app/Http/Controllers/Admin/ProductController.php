<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with(['category', 'subcategory'])->get();
        return view('admin.product.index', compact('products'));
    }

    public function index2(){
        return view('pages.product.index');
    }
    
    public function create(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.product.create', compact('categories', 'subcategories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}