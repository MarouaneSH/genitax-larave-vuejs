<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('test',"ApiController@test");

Route::get('settings/name={name}',"ApiController@getSetting");



Route::get('categories/parent={parent_id}',"ApiController@getCategory");
Route::get('caregories/cgi/header',"ApiController@cgiHeaderCategories");
Route::get('caregories/taxes',"ApiController@getTaxesCategories");

Route::get('article/id={id}&type={type}',"ApiController@getArticle");
Route::get('article/num={id}&type={type}&category={category}',"ApiController@getArticleByNum");
Route::get('article/query={query}&type_search={type_search}',"ApiController@searchArticle");
Route::get('article/num={num}&action={action}&type={type}',"ApiController@getArticleByAction");


Route::get('faqs',"ApiController@faqs");
Route::get('faqs/{id}/questions',"ApiController@faqs_questions");
Route::get('faqs/questions/query={query}',"ApiController@search_question");

Route::get('questions/{id}',"ApiController@question");

Route::get('infos',"ApiController@infos");


Route::get("outils","ApiController@outils");

Route::get("outils/coefficients","ApiController@coefficients");
Route::get("outils/nomenclatures","ApiController@nomenclatures");
Route::get("outils/tarif-fiscal","ApiController@tarifFiscal");
Route::get("outils/tarif-fiscal/article={id}","ApiController@tarifFiscal_artilce");
Route::get("outils/tarif-fiscal/category/article={id}","ApiController@tarifFiscal_category_article");


Route::get("outils/tarifs_fiscal/search/query={query}","ApiController@searchOutilsTarifFiscal");


