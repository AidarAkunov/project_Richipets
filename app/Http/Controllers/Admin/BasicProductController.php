<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Basic\BasicBrands;
use App\Models\Admin\Product;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;

class BasicProductController extends Controller
{
    public function index(){
        $BasicBrands = BasicBrands::all();

        return view('admin.mainContent.index', compact('BasicBrands'));
    }

    public function createProduct() {
        $product = Product::all();

        return view('admin.mainContent.product', compact('product'));
    }

    public function createBrand() {
        $brand = Brand::all();

        return view('admin.mainContent.brand', compact('brand'));
    }


    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'type' => 'required|integer',
            'product_id' => 'integer',
            'brand_id' => 'integer'
        ]);

        BasicBrands::create($data);

        return redirect(route('admin.mainContent.index'));
    }

    public function editBrand($id) {
        $BasicBrands = BasicBrands::find($id);
        $brand = Brand::all();

        return view('admin.mainContent.editBrand', compact('BasicBrands', 'brand'));
    }

    public function editProduct($id) {
        $BasicBrands = BasicBrands::find($id);
        $product = Product::all();

        return view('admin.mainContent.editProduct', compact('BasicBrands', 'product'));
    }

    public function update(Request $request,$id) {
        $data = $request->validate([
            'name' => 'required|string',
            'product_id' => 'integer',
            'brand_id' => 'integer'
        ]);

        $BasicBrands = BasicBrands::find($id);
        $BasicBrands->update($data);

    return redirect(route('admin.mainContent.index'));
}
    public  function destroy($id) {
        $BasicBrands = BasicBrands::find($id);
        $BasicBrands->delete();

        return  redirect(route('admin.mainContent.index'));
    }
}
