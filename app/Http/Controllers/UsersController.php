<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class UsersController extends Controller
{
    public function index($user_id)
    {
        $articles = Article::where('created_user_id', $user_id)->orderBy('created_at', 'desc')->get();
        return view('users.index', ['articles' => $articles]);
    }


    public function show(Request $request, $id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }
}
