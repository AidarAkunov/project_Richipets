<?php

namespace App\Http\Controllers\Basic;

use App\Filters\ProductFilter;
use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Property;
use App\Models\Admin\Subcategory;

class ProductFilterMainController extends Controller
{
    public function index(ProductFilter $request)
    {
        $productAll = Product::filter($request)->paginate(8);
        $category = Category::all();
        $brand = Brand::all();
        $property = Property::all();
        $subcategory = Subcategory::all();

        return view('basic.productFilter.index', compact('productAll', 'category', 'brand', 'property', 'subcategory'));
    }
}
