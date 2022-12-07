<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Image;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller{

    public function index($id =null) {
        if (isset($id)) {
            $image = Image::where('product_id', $id)->paginate(8);
        } else {
            $image = Image::paginate(8);
        }

        return view('admin.image.index', compact('image'));
    }

    public function create() {
        $product = Product::all();
        return view('admin.image.create', compact('product'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'image' => 'required|file',
            'product_id' => 'required|integer',
        ]);

        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
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
            'image' => 'file',
            'product_id' => 'required|integer',
        ]);

        if(isset($data['image'])) {
            $image = Image::find($id);
            $image_path = public_path(). '/storage/' . $image->image;
            unlink($image_path);
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }

        $image = Image::find($id);
        $image->update($data);

        return redirect(route('admin.image.index'));
    }

    public function destroy($id) {
        $image = Image::find($id);
        $image_path = public_path(). '/storage/' . $image->image;
        unlink($image_path);
        $image->delete();

        return redirect(route('admin.image.index'));
    }
}
?>
