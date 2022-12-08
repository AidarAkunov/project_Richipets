<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use App\Models\Admin\Subcategory;
use Illuminate\Http\Request;


class ProductController extends Controller{

    public function index($id = null) {
        if (isset($id)) {
            $product = Product::where('brand_id',$id)->paginate(8);
        } else {
            $product = Product::paginate(8);
        }

        return view('admin.product.index', compact('product'));
    }

    public function create() {
        $subcategory = Subcategory::all();
        $brand = Brand::all();

        return view('admin.product.create', compact('subcategory','brand' ));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'original_cost' => 'required|string',
            'price' => 'required|string',
            'count' => 'required|integer',
            'brand_id' => 'required|integer',
            'subcategory_id' => 'required|integer'
        ]);
        Product::create($data);

        return redirect(route('admin.product.index'));
    }

    public function edit($id) {
        $subcategory = Subcategory::all();
        $brand = Brand::all();
        $product = Product::find($id);

        return view('admin.product.edit', compact('subcategory','brand','product'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'original_cost' => 'required|string',
            'price' => 'required|string',
            'count' => 'required|integer',
            'brand_id' => 'required|integer',
            'subcategory_id' => 'required|integer'
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
