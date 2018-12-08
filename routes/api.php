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
Route::get('headerCategories/type={type}',"ApiController@getHeaderCategory");
Route::get('article/id={id}&type={type}',"ApiController@getArticle");




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
