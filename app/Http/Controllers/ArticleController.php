<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
  // public function index() {
  //   return view("article");
  // }

  // POST: Add Article to DB
  public function addArticle(Request $request) {
    return view("create-article");
  }

  public function articleDetail($aid) {
    $article = Article::find($aid);

    return view("detail", compact("article"));
  }

  public function createArticle(Request $request) {
    $article = new Article();
    $article->articleTitle = $request->articleTitle;
    $article->articleContent = $request->articleContent;
    $article->save();

    return redirect()->route('home');
  }

  // GET: Redirect to Edit Article Page
  public function editArticlePage($id) {
    $article = Article::find($id);

    return view("edit-article", compact("article"));
  }

  // POST: Redirect to Edit Article Page
  public function updateArticle(Request $request) {
    $article = Article::find($request->id);
    $article->articleTitle = $request->articleTitle;
    $article->articleContent = $request->articleContent;
    $article->save();

    return redirect()->route('home');
  }

  // POST: Delete An Article to the DB
  public function deleteArticle($did) {
    $article = Article::find($did);
    $article->delete();

    return redirect()->route('home');
  }
}
