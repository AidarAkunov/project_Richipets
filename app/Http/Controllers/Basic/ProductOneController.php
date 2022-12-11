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
        $productLike = Product::where('subcategory_id', $productOne->subcategory_id)->get();

        return view('basic.productOne.index', compact('category', 'productOne', 'productLike'));
    }

}



