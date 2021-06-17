<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        // dd($data);  
        return view('category.index',compact('data'));
    }
    public function create()
    {
        return view('category.create');
    }
    
     
    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:5|max:25',
            // 'email' => 'required|min:8|max:25|email:rfc,dns',
            // 'password' => 'required|min:8|max:25|confirmed',
            // 'image' =>'required',
        ]);
        // dd($request->all());
        Category::create($request->all());
        return redirect()->route('category.index');
    }
    
    public function edit($id){
        $data = Category::find($id);
        return view('category.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $data = Category::find($id);

        $request->validate([
            'name' => 'required|min:5|max:25',
            // 'email' => 'required|min:8|max:25|email:rfc,dns',
            // 'current_password'=>'required',
            // 'password' => 'required|min:8|max:25|confirmed',
            // 'image' =>'required',
        ]);

       
            $data->update($request->all());
       
       
        return redirect()->route('category.index');
    }

    public function destroy($id){
        $data = Category::find($id);
        $data->delete();

        return redirect()->route('category.index');
    }

}
