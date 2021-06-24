<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        $data = Article::find($id);
        return view('pages.detail',compact('data'));
    }
}
