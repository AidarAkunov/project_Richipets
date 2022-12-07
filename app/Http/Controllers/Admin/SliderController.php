<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{

    public function index() {
        $slider = Slider::paginate(8);
        return view('admin.slider.index', compact('slider'));
    }

    public function create(){
        return view('admin.slider.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'image' => 'required|file',
        ]);

        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Slider::create($data);

        return redirect(route('admin.slider.index'));
    }

    public function edit($id){
        $slider = Slider::find($id);

        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string',
            'image' => 'file',
        ]);

        if(isset($data['image'])) {
            $slider = Slider::find($id);
            $slider_path = public_path(). '/storage/' .$slider->image;
            unlink($slider_path);
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }

        $slider = Slider::find($id);
        $slider->update($data);

        return redirect(route('admin.slider.index'));
    }

    public function destroy($id){
        $slider = Slider::find($id);
        $slider_path = public_path(). '/storage/' .$slider->image;
        unlink($slider_path);
        $slider->delete();

        return redirect(route('admin.slider.index'));
    }
}
