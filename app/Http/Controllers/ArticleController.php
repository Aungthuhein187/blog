<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): string {
        return "Controller - Article index";
    }

    public function details($id): string {
        return "Controller - Article details - $id";
    }
}
