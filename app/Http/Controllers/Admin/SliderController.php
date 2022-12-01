<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{

    public function index() {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    public function create(){
        return view('admin.slider.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'link' => 'required|file',
        ]);
        $data['link'] = Storage::put('/images', $data['link']);
        Slider::create($data);
        return redirect(route('admin.slider.index'));
    }

    public function edit($id){
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'string',
        ]);

        $slider = Slider::find($id);
        $slider->update($data);
        return redirect(route('admin.slider.index'));
    }

    public function destroy($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect(route('admin.slider.index'));
    }
}
