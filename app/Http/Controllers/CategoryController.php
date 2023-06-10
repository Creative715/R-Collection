<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('subcategories')->whereNull('parent_id')->get();

        return view('categories.index', compact('categories'));
    }

    public function more($id)
    {
        $category = Category::findOrFail($id);
        $subcategories = $category->subcategories;

        return view('categories.more', compact('category', 'subcategories'));
    }
}
