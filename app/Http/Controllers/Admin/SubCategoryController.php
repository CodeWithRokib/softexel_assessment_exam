<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;


class SubCategoryController extends Controller
{
    public function index(){
        $subcategories = SubCategory::all();
        return view('admin.subcategory.index',compact('subcategories'));
    }

    
}