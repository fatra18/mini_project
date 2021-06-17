<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        // dd($data);  
        return view('users.index',compact('data'));
    }
    public function create()
    {
        return view('users.create');
    }
     
    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:8|max:25',
            'email' => 'required|min:8|max:25|email:rfc,dns',
            'password' => 'required|min:8|max:25|confirmed',
            'image_file' =>'required',
        ]);
        // dd($request);
        $image = $request->file('image_file');
        $new_name_image = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile'),$new_name_image);
        $request->merge([
            'image' => $new_name_image
        ]);
        // dd($request->all());
        User::create($request->all());
        return redirect()->route('user.index');
    }
    
    public function edit($id){
        $data = User::find($id);
        return view('users.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $data = User::find($id);

        $request->validate([
            'name' => 'required|min:8|max:25',
            'email' => 'required|min:8|max:25|email:rfc,dns',
            'current_password'=>'required',
            'password' => 'required|min:8|max:25|confirmed',
            'image' =>'required',
        ]);

        if ($request->current_password == $data->password) {
            $data->update($request->all());
        } else {
            return redirect()->back();
        }
        return redirect()->route('user.index');
    }

    public function destroy($id){
        $data = User::find($id);
        $data->delete();

        return redirect()->route('user.index');
    }
}
