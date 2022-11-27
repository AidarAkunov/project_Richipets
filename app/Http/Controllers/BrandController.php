<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Brand;


class BrandController extends Controller{

    public function index($id = null) {
        if ($id) {
            $brand = Brand::where('subcategory_id',$id)->get();
        } else {
            $brand = Brand::all();
        }
        return view('admin.brand.index', compact('brand'));
    }

    public function create() {
        $subcategory = Subcategory::all();
        return view('admin.brand.create', compact('subcategory'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'subcategory_id' => 'required|integer'
        ]); 
        Brand::create($data);
        return redirect(route('admin.brand.index'));
    }

    public function edit($id) {
        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand','id'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'subcategory_id' => 'required|integer'
        ]);

        $brand = Brand::find($id);
        $brand->update($data);

        return redirect(route('admin.brand.index'));
    }

    public function destroy($id) {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect(route('admin.brand.index'));
    }
}
?>