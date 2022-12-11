<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Subcategory;
use App\Models\Admin\VetService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class VetServiceController extends Controller{

    public function index() {
        $vetservice = VetService::paginate(8);
        return view('admin.vetservice.index', compact('vetservice'));
    }

    public function create() {
        $subcategory = Subcategory::all();
        return view('admin.vetservice.create', compact('subcategory'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|text',
            'phone' => 'required|string',
            'image' => 'required|file',
            'link' => 'required|string',
            'subcategory_id' => 'required|integer'
        ]);

        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        VetService::create($data);

        return redirect(route('admin.vetservice.index'));
    }

    public function edit($id) {
        $subcategory = Subcategory::all();
        $vetservice = VetService::find($id);
        return view('admin.vetservice.edit', compact('vetservice','subcategory'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|text',
            'phone' => 'required|string',
            'image' => 'required|file',
            'link' => 'required|string',
            'subcategory_id' => 'required|integer'
        ]);

        if(isset($data['image'])) {
            $vetservice = VetService::find($id);
            $image_path = public_path(). '/storage/' . $vetservice->image;
            unlink($image_path);
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }

        $vetservice = VetService::find($id);
        $vetservice->update($data);

        return redirect(route('admin.vetservice.index'));
    }

    public function destroy($id) {
        $vetservice = VetService::find($id);
        $image_path = public_path(). '/storage/' . $vetservice->image;
        unlink($image_path);
        $vetservice->delete();

        return redirect(route('admin.vetservice.index'));
    }
}
?>
