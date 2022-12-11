<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $property = Property:: all();

        return view('admin.property.index', compact('property'));
    }

    public function create()
    {
        return view('admin.property.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string',
        ]);
        Property::create($data);
        return redirect(route('admin.property.index'));
    }

    public function edit($id)
    {
        $property = Property::find($id);
        return view('admin.property.edit', compact('property', 'id'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'string',
        ]);

        $property = Property::find($id);
        $property->update($data);

        return redirect(route('admin.property.index'));
    }

    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect(route('admin.property.index'));
    }
}
