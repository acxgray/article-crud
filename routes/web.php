<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $articles = Article::all();

    return view('article', compact("articles"));
})->name("home");

Route::get('/create', [ArticleController::class,"addArticle"])->name("add.page");
Route::post('/create', [ArticleController::class,"createArticle"])->name("create.article");

Route::get('/article/{aid}', [ArticleController::class,"articleDetail"])->name("detail");
Route::get('/edit/{id}', [ArticleController::class,"editArticlePage"])->name("edit.page");
Route::post('/update}', [ArticleController::class,"updateArticle"])->name("update.article");
Route::get('/delete/{id}', [ArticleController::class,"deleteArticle"])->name("delete.article");

