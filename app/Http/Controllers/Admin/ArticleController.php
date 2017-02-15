<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        return view('admin/article/index')->withArticle(Article::all());
    }
    public function create(){
        return view('admin/article/create');
    }
}
