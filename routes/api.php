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



Route::get('categories/parent={parent_id}',"ApiController@getCategory");
Route::get('caregories/cgi/header',"ApiController@cgiHeaderCategories");
Route::get('caregories/taxes',"ApiController@getTaxesCategories");

Route::get('article/id={id}&type={type}',"ApiController@getArticle");
Route::get('article/num={id}&type={type}&category={category}',"ApiController@getArticleByNum");


Route::get('faqs',"ApiController@faqs");
Route::get('faqs/{id}/questions',"ApiController@faqs_questions");

Route::get('questions/{id}',"ApiController@question");



