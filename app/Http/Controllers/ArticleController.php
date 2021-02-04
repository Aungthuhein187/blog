<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index(): string
    {
        $data = Article::latest()->paginate(5);

        return view("articles.index", ["articles" => $data]);
    }

    public function detail($id): string
    {
        $data = Article::find($id);
        return view("articles.detail", ["article" => $data]);
    }
}
