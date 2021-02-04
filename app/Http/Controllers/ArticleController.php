<?php

namespace App\Http\Controllers;

use \App\Models\Article;

class ArticleController extends Controller
{
    public function index(): string
    {
        $data = Article::all();

        return view("articles.index", ["articles" => $data]);
    }

    public function details($id): string
    {
        return "Controller - Article details - $id";
    }
}
