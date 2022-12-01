<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;


class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function show() {
        $data = [];
        $data ['categoryCount'] = Category::all()->count();
        $data ['subcategoryCount'] = Subcategory::all()->count();
        $data ['brandCount'] = Brand::all()->count();
        $data ['productCount'] = Product::all()->count();
        return view('admin.index', compact('data'));
    }

    // public function category() {
    //     return view('admin.category.index');
    // }

    // public function subcategory() {
    //     return view('admin.subcategory.index');
    // }

    // public function brand() {
    //     return view('admin.brand.index');
    // }

    // public function product() {
    //     return view('admin.product.index');
    // }

    // public function profile() {
    //     return view('admin.profile.index');
    // }

    // public function service() {
    //     return view('admin.service.index');
    // }

    // public function analysis() {
    //     return view('admin.analysis.index');
    // }
}



