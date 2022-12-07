<?php

namespace App\Http\Controllers\Basic;

use App\Filters\ProductFilter;
use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Property;


class ProductFilterMainController extends Controller
{
    public function index(ProductFilter $request, $id = null){
        if (isset($id)) {
            $productAll = Product::where('subcategory_id',$id)->paginate(8);
        } else {
            $productAll = Product::filter($request)->paginate(8);
        }
        $category = Category::all();
        $brand = Brand::all();
        $property = Property::all();

        return view('basic.productAll.index', compact('productAll','category', 'brand', 'property'));
    }
}
