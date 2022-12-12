<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Subcategory;


class AdminController extends Controller
{
    public function index() {
        $data = [];
        $data['categoryCount'] = Category::all()->count();
        $data['subcategoryCount'] = Subcategory::all()->count();
        $data['brandCount'] = Brand::all()->count();
        $data['productCount'] = Product::all()->count();

        return view('admin.main.index', compact('data'));
    }
}



