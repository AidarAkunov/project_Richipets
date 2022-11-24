<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;


class ProductController extends Controller{

    public function index() {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create() {
        $brand = Brand::all();
        return view('admin.product.create', compact('brand'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'brand_id' => 'required|integer'
        ]); 
        Product::create($data);
        return redirect(route('admin.product.index'));
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product','id'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'brand_id' => 'required|integer'
        ]);

        $product = Product::find($id);
        $product->update($data);

        return redirect(route('admin.product.index'));
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect(route('admin.product.index'));
    }
}
?>