<?php

namespace App\Http\Controllers\Basic;
use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Property;
use App\Models\Admin\Subcategory;


class ProductAllController extends Controller
{
    public function index($id) {
        $productAll = Product::where('subcategory_id', $id)->get();
        $category = Category::all();
        $subcategory = Subcategory::find($id);
        $brand = Brand::all();

        $property = Property::all();

        return view('basic.productAll.index', compact('productAll','category', 'subcategory', 'brand', 'property'));
    }
}



