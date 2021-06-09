<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($category, $product = null)
    {
        return view('product');
    }
}
