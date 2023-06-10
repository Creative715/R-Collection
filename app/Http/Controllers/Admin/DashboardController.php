<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Encategory;
use App\Models\Enproduct;


class DashboardController extends Controller
{
    public function index(){
        $enproducts_count = Enproduct::all()->count();
        $encat_count = Encategory::all()->count();


        return view('admin.home.index', [
            'enproducts_count' => $enproducts_count,
            'encat_count' => $encat_count
        ]);
    }
}
