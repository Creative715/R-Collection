<?php

namespace App\Http\Controllers;

use App\Models\Encategory;

class EncategoryController extends Controller
{
    public function index()
    {
        $encategories = Encategory::whereNull('parent_id')->where('published', '1')->get();
        return view('app.enmain', compact('encategories'));
    }

    public function more($slug)
    {
        $encategories = Encategory::with('subcategories', 'enproducts')->where('slug', $slug)->firstOrFail();
        $subcategories = $encategories->subcategories->where('published', '1');
        $enproducts = $encategories->enproducts()->with('encategories')->latest()->where('published', '1')->paginate(12);
        return view('app.encategory.more', compact('encategories', 'subcategories', 'enproducts'));
    }
}
