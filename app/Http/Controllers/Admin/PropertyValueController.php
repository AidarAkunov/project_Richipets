<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\PropertyValue;
use App\Models\Admin\Property;

use Illuminate\Http\Request;

class PropertyValueController extends Controller
{
    public function index($id){

        if (isset($id)) {
            $property_value = PropertyValue:: where('property_id', $id)->get();
        }
            $property = Property:: find($id);

            return view('admin.property.propertyValue.property_value', compact('property_value','property'));
    }


    public function create($id) {
        $property_value = PropertyValue::all();
        $property = Property::find($id);
        return view('admin.property.propertyValue.create', compact('property_value', 'property'));
    }

    public function store(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'property_id' => 'required|integer'
        ]);
        PropertyValue::create($data);

        return redirect(route('admin.property.propertyValue.property_value', $id));
}

    public function edit($id) {
        $property_value = PropertyValue::find($id);
        $property = Property::all();

        return view('admin.property.propertyValue.edit', compact('property_value', 'property'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'property_id' => 'required|integer'
        ]);

        $property_value = PropertyValue::find($id);
        $property_value->update($data);

    return redirect(route('admin.property.propertyValue.property_value', $property_value->property_id));
}

    public function destroy($id) {
        $property_value = PropertyValue::find($id);
        $property_value->delete();

        return redirect(route('admin.property.propertyValue.property_value', $property_value->property_id));
    }
}
