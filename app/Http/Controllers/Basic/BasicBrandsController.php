<?php

namespace App\Http\Controllers\Basic;
use App\Http\Controllers\Controller;
use App\Models\BasicBrands;


class BasicBrandsController extends Controller
{

    public function index() {
        $basicBrands = BasicBrands::all();
        return view('basic.index', compact('basicBrands'));
    }
}


