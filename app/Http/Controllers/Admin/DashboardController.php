<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Action;
use App\Models\Product;
use App\Models\Category;
use App\Models\Page;

class DashboardController extends Controller
{
    public function index(){
        $products_count = Product::all()->count();
        $cat_count = Category::all()->count();
        $pages_count = Page::all()->count();
        $actions_count = Action::all()->count();



        return view('admin.home.index', [
            'products_count' => $products_count,
            'cat_count' => $cat_count,
            'pages_count' => $pages_count,
            'actions_count' => $actions_count
        ]);
    }
}
