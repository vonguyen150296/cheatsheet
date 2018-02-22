<?php

namespace App\Http\Controllers;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller
{
     public function index(){
    	$articles = Article::all();
    	return view('articles.index',compact('articles'));
    }
    public function show($id){
    	$article = Article::find($id);
    	return view('articles.show',compact('article'));
    }
    public function store(){
        $title=Input::get('title');
        $content=Input::get('content');
        $code=Input::get('code');
        $tags=Input::get('tags-input');
        Article::create([
            'title'=>$title,
            'content'=>$content,
            'code'=>$code,
            'tagsinput'=>$tags
        ]);
        return redirect()->route('articles.index');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }
    public function update($id){
        $article = Article::find($id);
        $title=Input::get('title');
        $content=Input::get('content');
        $code=Input::get('code');
        $tags=Input::get('tags-input');
        $article -> update([
            'title'=>$title,
            'content'=>$content,
            'code'=>$code,
            'tagsinput'=>$tags
        ]);
        return redirect()->route('articles.index');
    }
    public function destroy($id){
        $article = Article::find($id);
        $article -> delete();
        return redirect() -> route('articles.index');
    }
}

