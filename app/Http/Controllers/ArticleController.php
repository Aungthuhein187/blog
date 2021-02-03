<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index(): string
    {
        $data = [
            ["id" => 1, "title" => "First article"],
            ["id" => 2, "title" => "Second article"],
        ];
        return view("articles.index", ["articles" => $data]);
    }

    public function details($id): string
    {
        return "Controller - Article details - $id";
    }
}
