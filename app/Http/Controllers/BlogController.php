<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::get();
        $tags = Tag::get();
        return view('blogs', compact('articles', 'tags'));
    }
}
