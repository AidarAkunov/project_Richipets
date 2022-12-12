<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller{

    public function index() {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    public function create(){
        $role = User::getRoles();
        return view('admin.user.create', compact('role'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role' => 'required|integer',
        ]);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect(route('admin.user.index'));
    }

    public function edit($id){
        $user = User::find($id);
        $role = User::getRoles();
        return view('admin.user.edit', compact('user','id', 'role'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $request->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role' => 'required|integer',
        ]);

        $user = User::find($id);
        $user->update($data);
        return redirect(route('admin.user.index'));
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect(route('admin.user.index'));
    }
}
?>
