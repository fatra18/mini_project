<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::with('user','category')->get();
        //  dd($data->toArray());  
        return view('articles.index',compact('data'));
    }

    // public function create()
    // {
    //     return view('articles.create');
    // }

    // public function store(Request $request){
    // $request->validate([
    //     'title' => 'required|min:10|max:30',
    //     'content' => 'required|min:10|max:100',
    //     'image' => 'required|min:10|max:100',  
    // ]);
    // // dd($request->all());
    // Article::create($request->all());
    // return redirect()->route('articles.index');
    // }
    // public function edit($id){
    //     $data = Article::find($id);
    //     return view('articles.edit',compact('data'));
    // }
    // public function update(Request $request,$id){
    //     $data = Article::find($id);

    //     // $request->validate([
    //     //     'name' => 'required|min:5|max:25',
    //     //     // 'email' => 'required|min:8|max:25|email:rfc,dns',
    //     //     // 'current_password'=>'required',
    //     //     // 'password' => 'required|min:8|max:25|confirmed',
    //     //     // 'image' =>'required',
    //     // ]);

       
    //         $data->update($request->all());
       
       
    //     return redirect()->route('article.index');
    // }

    // public function destroy($id){
    //     $data = Article::find($id);
    //     $data->delete();

    //     return redirect()->route('article.index');
    // }



    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('articles.create',compact('users','categories'));
    }
    public function store(ArticleRequest $request){
       
        // dd($request->all());
        // User::create([
        //     // 'id' => $request->id,
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'image' => $request->image,
            
        // ]);
        // Category::create([
        //     // 'id' => $request->id,
        //     'name' => $request->name,
        // ]);
        // dd($request)->file('image');
        $image_file = $this->uploudImage($request->file('image'));
        // $image_file = $request->file('image_file')->store('img','public');
            // dd($image_file);
        // $request->merge([
        //     'image' =>$image_file
        // ]);
        $request = $request->all();
        $request['image'] = $image_file;
        Article::create($request);
        return redirect()->route('articles.index')->with('sukses-store','Data berhasil');
        return redirect()->route('articles.index');
        // User::create($request->all());
        // Category::create($request->all());
    }

    public function show($id)
    {
        $data = Article::find($id);
        // $data = [
        //     'article' =>$this->Article->detailData($id),
        // ]; 
        return view('articles.show',compact('data'));       


    }
    
    
    public function edit($id){
        $categories = Category::all();
        $users = User::all();
        $data = Article::findOrFail($id);
        return view('articles.edit',compact('categories','users','data'));
    }


    public function update(Request $request,$id)
    {   
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
        ]);
        $data = Article::find($id);
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
        return redirect()->route('articles.index');
    }
        // {
        //     unlink('profile/'.$ubah->image);
        //     $gambar = $request->file('image');
        //     $UbahExtensi = $gambar->getClientOriginalExtension();
        //     $baru = time(). '.' .$UbahExtensi;
        //     $gambar->move('profile',$baru);
        //     $ubah->image = $baru;
        // }
        // $img_path = public_path('profile/' . $ubah->image);
        // if (file_exists($img_path)) {
        //     unlink($img_path);
        // }
        // $data = Article::find($id);
        // Article::find($request->id)->update([
        //     'title' =>$request->title,
        //     'content'=>$request->content,
        //     'image'=>$request->image,
        //     'user_id'=>$request->user_id,
        //     'category_id'=>$request->category_id,
        // ]);
        // $data->update($request->all());
      
       
        public function destroy($id){
        $data = Article::findOrFail($id);
        $this->removeImage($data->image);
        $data->delete();
        return back();

        return redirect()->route('articles.index');
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
       
