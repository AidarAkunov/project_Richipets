<?php

namespace App\Http\Controllers\Basic;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;


class SubcategoryViewController extends Controller
{
    public function index($id) {
        $category = Category::all();
        $subcategory = Subcategory::where('category_id', $id)->get();

        return view('basic.subcategory.index', compact('category', 'subcategory'));
    }
}



