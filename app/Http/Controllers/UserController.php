<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::with('articles')->get();
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
        // $image = $request->file('image_file');
        // $new_name_image = time() . '.' . $image->getClientOriginalExtension();
        // $image->move(public_path('profile'),$new_name_image);
        $image_file = $this->uploadImage($request->file('image_file'));
        $request->merge([
            'image' =>  $image_file
        ]);
        // dd($request->all());
        User::create($request->all());
        return redirect()->route('user.index');
    }


    public function show($id)
    {
        $data = User::find($id);
        // $data = [
        //     'article' =>$this->Article->detailData($id),
        // ]; 
        return view('articles.show',compact('data'));       


    }
    
    public function edit($id){
        $data = User::find($id);
        return view('users.edit',compact('data'));
    }
    
    

    public function update(Request $request,$id){
        $data = User::find($id);

        $request->validate([
          
        ]);
    
       
        if($request->file('image') == null){
            // dd('ngak ada');
            $request = $request->all();
            $request['image'] = $data->image;
        }else {
            // dd('ada');
            $this->removeImage($data->image);
            $image_file = $this->uploudImage($request->image);
            $request = $request->all();
            $request['image'] = $image_file;
        }
        $data->update($request);
       
   

        // if ($request->current_password == $data->password) {
        //     $data->update($request->all());
        // } else {
        //     return redirect()->back();
        // }
        return redirect()->route('users.index');
    }

    
    public function destroy($id){
        $data = User::findOrFail($id);
        $this->removeImage($data->image);
        $data->delete();
        return back();

        return redirect()->route('users.index');
        }

    public function uploadImage($image)
    {
        // $image = $request->file('image_file');
        $new_name_image =time() . '.'. $image->getClientOriginalExtension();
        $image->move(public_path('profile'), $new_name_image);
        return $new_name_image;
        
    }
    public function uploudImage($image)
    {
    // $image = $request->file('image_file');
    $new_name_image = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('profile'),$new_name_image);
    return $new_name_image;
    }

    public function removeImage($image)
    {
        if (file_exists('profile/'.$image)){

            unlink('profile/'.$image);
        }
    }

}
