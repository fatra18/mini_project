<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(Request $request){
        
        $data = Article::all();
        $data2 = Article::orderBy('id','desc')->paginate(3);
        $data3 = Article::orderBy('id','desc')->paginate(4);
        return view('pages.index',compact('data','data2','data3'));
       
    }

    public function search(Request $request)
    {
        $cari = $request->cari;
        
        $data1 =Article::where('content','LIKE',"%".$cari."%")->get();
        // dd($search->toArray());
        return view('pages.index',compact('data1'));
    }
    
    
   public function show($id)
   {
       $data = Article::all();
       $data1 = Article::find($id);
       return view('pages.detail',compact('data','data1'));
   }
}

