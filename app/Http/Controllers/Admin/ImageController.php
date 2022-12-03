<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller{

    public function index($id =null) {
        if (isset($id)) {
            $image = Image::where('product_id', $id)->get();
        } else {
            $image = Image::all();
        }

        return view('admin.image.index', compact('image'));
    }

    public function create() {
        $product = Product::all();
        return view('admin.image.create', compact('product'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|file',
            'product_id' => 'required|integer',
        ]);

        $data['name'] = Storage::disk('public')->put('/images', $data['name']);
        Image::create($data);

        return redirect(route('admin.image.index'));
    }

    public function edit($id) {
        $product = Product::all();
        $image = Image::find($id);

        return view('admin.image.edit', compact('image','product'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'file',
            'product_id' => 'required|integer',
        ]);

        if(isset($data['name'])) {
            $image = Image::find($id);
            $image_path = public_path(). '/storage/' . $image->name;
            unlink($image_path);
            $data['name'] = Storage::disk('public')->put('/images', $data['name']);
        }

        $image = Image::find($id);
        $image->update($data);

        return redirect(route('admin.image.index'));
    }

    public function destroy($id) {
        $image = Image::find($id);
        $image_path = public_path(). '/storage/' . $image->name;
        unlink($image_path);
        $image->delete();

        return redirect(route('admin.image.index'));
    }
}
?>
