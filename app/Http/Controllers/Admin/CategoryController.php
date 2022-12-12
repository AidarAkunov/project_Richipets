<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller{

    public function index() {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
        ]);
        Category::create($data);
        return redirect(route('admin.category.index'));
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category','id'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string',
        ]);

        $category = Category::find($id);
        $category->update($data);
        return redirect(route('admin.category.index'));
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect(route('admin.category.index'));
    }
}
?>
