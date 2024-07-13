<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function index(){
        $subcategories = SubCategory::all();
        return view('admin.subcategory.index',compact('subcategories'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.subcategory.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        Subcategory::create($request->all());
        return redirect()->route('subcategroy.index');
    }

    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $subcategory->update($request->all());
        return redirect()->route('subcategories.index');
    }

    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategories.index');
    }
    
}