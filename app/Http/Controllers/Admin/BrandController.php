<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Brand;
use App\Models\Admin\Subcategory;
use Illuminate\Http\Request;


class BrandController extends Controller{

    public function index($id = null) {
        if (isset($id)) {
            $brand = Brand::where('subcategory_id',$id)->paginate(8);
        } else {
            $brand = Brand::paginate(8);
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
        $subcategory = Subcategory::all();
        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand','subcategory'));
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
