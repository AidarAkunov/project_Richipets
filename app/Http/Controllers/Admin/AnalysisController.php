<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;

class AnalysisController extends Controller
{
    public function index() {
        $analysis = Product::all();

        return view('admin.analysis.index', compact('analysis'));
    }
}
