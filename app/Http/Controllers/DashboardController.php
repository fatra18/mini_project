<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jml_articles = Article::all()->count();
        $jml_users = User::all()->count();
        $jml_categories = Category::all()->count();

        return view('index')->with(['jml_articles' => $jml_articles, 'jml_users' => $jml_users, 'jml_categories' => $jml_categories]);
    }
   
}
