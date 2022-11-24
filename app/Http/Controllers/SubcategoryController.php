<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;


class SubcategoryController extends Controller{

    public function index() {
        $subcategory = Subcategory::all();
        return view('admin.subcategory.index', compact('subcategory'));
    }

    public function create() {
        $category = Category::all();
        return view('admin.subcategory.create', compact('category'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer'
        ]); 
        Subcategory::create($data);
        return redirect(route('admin.subcategory.index'));
    }

    public function edit($id) {
        $subcategory = Subcategory::find($id);
        return view('admin.subcategory.edit', compact('subcategory','id'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|integer'
        ]);

        $subcategory = Subcategory::find($id);
        $subcategory->update($data);

        return redirect(route('admin.subcategory.index'));
    }

    public function destroy($id) {
        $subcategory = Subcategory::find($id);
        $subcategory->delete();

        return redirect(route('admin.subcategory.index'));
    }
}
?>