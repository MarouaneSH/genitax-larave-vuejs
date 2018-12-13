<?php

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
    return view('home');
});



Route::get('/test', function () {

    return App\QuestionResponse::search("patentes")->get();
    $matching_category = App\Category::search("Généralités")->get()->pluck("id");
    $matching_articles = App\ArticleCirculaire::search("sd ss")->get()->pluck("categorie_id");
    $all_matching = $matching_category->merge($matching_articles);

    $articles = App\Category::whereIn("id", $all_matching->unique())
                ->with("articles:id,categorie_id")
                ->whereHas('articles')
                ->get();
   
    return response()->json(["articles" => $articles]);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
