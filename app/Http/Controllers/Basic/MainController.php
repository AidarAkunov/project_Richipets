<?php

namespace App\Http\Controllers\Basic;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Slider;
use App\Models\Basic\BasicBrands;


class MainController extends Controller
{
    public function index() {
        $category = Category::all();
        $basicBrands = BasicBrands::all();
        $slider = Slider::all();
        return view('basic.main.index', compact('category', 'basicBrands', 'slider'));
    }

}



