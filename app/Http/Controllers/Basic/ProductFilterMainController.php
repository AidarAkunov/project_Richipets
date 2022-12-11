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
    public function index(ProductFilter $request, $id = null)
    {
        if (isset($id)) {
            $productAll = Product::where('subcategory_id', $id)->paginate(8);
        } else {
            $productAll = Product::filter($request)->paginate(8);
        }
        $category = Category::all();
        $brand = Brand::where('subcategory_id', $id)->get();
        $property = Property::all();
        $subcategory = Subcategory::find($id);
        $q = $subcategory->category_id;
        $subcategory = Subcategory::where('category_id', $q)->get();

        return view('basic.productAll.index', compact('productAll', 'category', 'brand', 'property', 'subcategory'));
    }
}
