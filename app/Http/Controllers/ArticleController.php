<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        
        /*$articles = Article::when($query, function ($queryBuilder) use ($query) {
            return $queryBuilder->where('title', 'like', "%{$query}%")
                                ->orWhere('content', 'like', "%{$query}%");
        })->get();*/
        $articles = Article::search($query)->get();

        return inertia('Articles/Index', [
            'articles' => $articles,
            'query' => $query,
        ]);
    }
}
