<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{

    public function searchArticles(Request $request){
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }

    public function homepage()
    {

        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('article.homepage', compact('articles'));  
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
        $article = Article::create([
            'user_id'=>auth()->user()->id
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public static function middleware(): array
    {return[
        new Middleware('auth', only: ['create']),
    ];
        
    }

    public function byCategory(Category $category){
        $articles = $category->articles->where('is_accepted', true);
        return view('article.byCategory', ['articles' => $category->articles, 'category' => $category ]);
    }

    public function joinUs(){
        return view('article.lavora-con-noi');
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
