<?php

namespace App\Http\Controllers;

use App\Models\Enproduct;

class EnproductController extends Controller
{
    public function more($slug){
        $enproducts = Enproduct::findBySlug($slug);
        return view('app.enproduct.more', compact('enproducts'));
    }
}
