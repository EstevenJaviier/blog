<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Image;
use Carbon\Carbon;
use App\Category;
use App\Tag;

class HomeController extends Controller
{

    public function __construct()
    {
        Carbon::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(15);

        $images = Image::orderBy('id', 'ASC')->paginate(4);
        $articles->each(function($articles)
        {
            $articles->category;
            $articles->images;
        });

        return view('vistas.index')
            ->with('articles', $articles)
            ->with('images', $images);
    }

    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(15);

        $images = Image::orderBy('id', 'ASC')->paginate(4);
        $articles->each(function($articles)
        {
            $articles->category;
            $articles->images;
        });

        return view('vistas.index')
            ->with('articles', $articles)
            ->with('images', $images);
    }

    public function searchTag($name)
    {
        $tag = Tag::SearchTag($name)->first();
        $articles = $tag->articles()->paginate(14);

        $images = Image::orderBy('id', 'ASC')->paginate(4);
        $articles->each(function($articles)
        {
            $articles->category;
            $articles->images;
        });

        return view('vistas.index')
            ->with('articles', $articles)
            ->with('images', $images);
    }

    public function viewArticle($slug)
    {
        $article = Article::findBySlugOrFail($slug);
        $article->category;
        $article->images;

        return view('vistas.article')->with('article', $article);
    }
}
