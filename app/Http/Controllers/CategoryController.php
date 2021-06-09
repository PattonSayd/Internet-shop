<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function category($category)
    {
        $category = Category::where('alias', $category)->first();

        return view('category', compact('category'));
    }
}
