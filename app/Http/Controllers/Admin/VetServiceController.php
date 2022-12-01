<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use App\Models\VetService;
use Illuminate\Http\Request;


class VetServiceController extends Controller{

    public function index() {
        $vetservice = VetService::all();
        return view('admin.vetservice.index', compact('vetservice'));
    }

    public function create() {
        $subcategory = Subcategory::all();
        return view('admin.vetservice.create', compact('subcategory'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'phone' => 'required|string',
            'link' => 'required|string',
            'subcategory_id' => 'required|integer'
        ]);
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
            'description' => 'required|string',
            'phone' => 'required|string',
            'link' => 'required|string',
            'subcategory_id' => 'required|integer'
        ]);

        $vetservice = VetService::find($id);
        $vetservice->update($data);

        return redirect(route('admin.vetservice.index'));
    }

    public function destroy($id) {
        $vetservice = VetService::find($id);
        $vetservice->delete();

        return redirect(route('admin.vetservice.index'));
    }
}
?>
