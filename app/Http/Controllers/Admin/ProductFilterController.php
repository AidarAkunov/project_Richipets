<?php

namespace App\Http\Controllers\Admin;

use App\Filters\ProductFilter;
use App\Http\Controllers\Controller;
use App\Models\Admin\Product;

class ProductFilterController extends Controller
{
    public function index(ProductFilter $request){
        $product = Product::filter($request)->paginate(8);
        return view('admin.product.index', compact('product'));
    }
}
