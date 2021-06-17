<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::all();
        //  dd($data);  
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
    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required|min:8|max:25',
        //     'email' => 'required|min:8|max:25|email:rfc,dns',
        //     'password' => 'required|min:8|max:25|confirmed',
        //     'image' =>'required',
        // ]);
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
        
        Article::create($request->all());
        // User::create($request->all());
        // Category::create($request->all());
        return redirect()->route('article.index');
    }
    public function edit($id){
        $categories = Category::find($id);
        $users = User::find($id);
        $data = Article::find($id);
        return view('articles.edit',compact('categories','users','data'));
    }


    public function update(Request $request,$id)
    {
        Article::find($request->id)->update([
            'title' =>$request->title,
            'content'=>$request->content,
            'image'=>$request->image,
            'user_id'=>$request->user_id,
            'category_id'=>$request->category_id,
        ]);
    }
      
   }     
       
