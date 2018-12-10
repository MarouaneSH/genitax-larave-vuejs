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
    return App\Category::whereDoesntHave("children")
                         ->where("parent_id", "!=", null)
                         ->get();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
