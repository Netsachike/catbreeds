<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Resources\Article as ArticleResource;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }
    public function welcome(){
        return view('welcome');
    }
   
    function list(){
      //Get Articles
      $articles = Article::paginate(15);

      //Returns collection of article as a resourse
       $data = ArticleResource::collection($articles);
       return $data;
    }
}
