<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function main() {
        return view('admin.main.index');
    }

    public function subcategory() {
        return view('admin.subcategory.index');
    }

    public function product() {
        return view('admin.product.index');
    }

    public function profile() {
        return view('admin.profile.index');
    }

    public function service() {
        return view('admin.service.index');
    }

    public function analysis() {
        return view('admin.analysis.index');
    }

    public function allProduct() {
        return view('admin.allProduct.index');
    }
}



