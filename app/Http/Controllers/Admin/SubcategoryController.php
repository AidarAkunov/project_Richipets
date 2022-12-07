<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SubcategoryController extends Controller{

    public function index($id = null) {
        if (isset($id)) {
            $subcategory = Subcategory::where('category_id',$id)->paginate(8);
        } else {
            $subcategory = Subcategory::paginate(8);
        }
        return view('admin.subcategory.index', compact('subcategory'));
    }

    public function create() {
        $category = Category::all();
        return view('admin.subcategory.create', compact('category'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'image' => 'file',
            'category_id' => 'required|integer'
        ]);

        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Subcategory::create($data);

        return redirect(route('admin.subcategory.index'));
    }

    public function edit($id) {
        $category = Category::all();
        $subcategory = Subcategory::find($id);
        return view('admin.subcategory.edit', compact('subcategory','category'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'image' => 'file',
            'category_id' => 'required|integer'
        ]);
        if(isset($data['image'])) {
            $subcategory = Subcategory::find($id);
            $image_path = public_path(). '/storage/' . $subcategory->image;
            unlink($image_path);
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }

        $subcategory = Subcategory::find($id);
        $subcategory->update($data);

        return redirect(route('admin.subcategory.index'));
    }

    public function destroy($id) {
        $subcategory = Subcategory::find($id);
        $image_path = public_path(). '/storage/' . $subcategory->image;
        unlink($image_path);
        $subcategory->delete();

        return redirect(route('admin.subcategory.index'));
    }
}
?>
