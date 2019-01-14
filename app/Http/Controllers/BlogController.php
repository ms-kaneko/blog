<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('article.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->created_user_id = Auth::id();
        $article->updated_user_id = Auth::id();
        $article->save();

        return redirect(route('blogs.index'));
    }

    public function edit(Request $request, $id)
    {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }

    public function update(Request $request)
    {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->updated_user_id = Auth::id();
        $article->save();
        return redirect(route('blogs.index'));
    }

    public function show(Request $request, $id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

    public function destroy(Article $article)
    {
        \DB::transaction(function () use ($article) {
            $article->delete();
        });
        return redirect(route('blogs.index'));
    }
}
