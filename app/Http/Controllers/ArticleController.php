<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    
    public function index()
    {
        $articles = Article::paginate();

        return view('article.index', compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * $articles->perPage());
    }

    
    public function create()
    {
        $article = new Article();
        return response(view('article.create', compact('article')));
    }

    
    public function store(Request $request)
    {
        request()->validate(Article::$rules);

        $article = Article::create($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Articulo creado exitosamente.');
    }

    
    public function show($id)
    {
        $article = Article::find($id);

        return view('article.show', compact('article'));
    }

   
    public function edit($id)
    {
        $article = Article::find($id);

        return view('article.edit', compact('article'));
    }

   
    public function update(Request $request, Article $article)
    {
        request()->validate(Article::$rules);

        $article->update($request->all());

        return redirect()->route('articles.index')
            ->with('success', 'Articulo editado exitosamente');
    }

    
    public function destroy($id)
    {
        $article = Article::find($id)->delete();

        return redirect()->route('articles.index')
            ->with('success', 'Articulo eliminado exitosamente');
    }
}
