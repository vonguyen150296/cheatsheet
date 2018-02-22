<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    	return redirect('articles');
    }
    
    public function create(){
    	return view('articles.create');
    }
}
