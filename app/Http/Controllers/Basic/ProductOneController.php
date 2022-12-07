<?php

namespace App\Http\Controllers\Basic;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;


class ProductOneController extends Controller
{
    public function index($id) {
        $productOne = Product::find($id);
        $category = Category::all();

        return view('basic.productOne.index', compact('category', 'productOne'));
    }

}



