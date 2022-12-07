<?php

namespace App\Http\Controllers\Basic;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use App\Models\Basic\BasicBrands;


class MainController extends Controller
{
    public function index() {
        $category = Category::all();
        $basicBrands = BasicBrands::all();
        $slider = Slider::all();
        $popular = Product::orderBy('count', 'desc')->get();
        $cheap = Product::orderBy('price', 'asc')->get();
        return view('basic.main.index', compact('category', 'basicBrands', 'slider', 'popular', 'cheap'));
    }

}


