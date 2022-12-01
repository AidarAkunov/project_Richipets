<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller{

    public function index($id = null) {
        if (isset($id)) {
            $product = Product::where('brand_id',$id)->get();
        } else {
            $product = Product::all();
        }
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
        $brand = Brand::all();
        $product = Product::find($id);
        return view('admin.product.edit', compact('product','brand'));
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
