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



Route::get('test',function() {
    //get first level categories
    $level_1 = App\Category::where('level',1)->get();

    $level_items = [];
    foreach($level_1  as $level) {
        array_push($level_items, $level);
        $nested_level =  App\Category::where('parent_id',$level->id)->orderBy("level")->get();
        foreach($nested_level as $nested) {
            $level_items[sizeof($level_items) - 1]->child = $nested;
        }
    }

    return    $level_items;
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
