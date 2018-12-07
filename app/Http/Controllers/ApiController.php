<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ApiController extends Controller
{
    public function getCategory() {
        
        return  Category::select("id","parent_id","titre","level")
                ->with('children:id,parent_id,titre,level')
                ->whereNull('parent_id')
                ->orderBy("level")
                ->get();
    }

}
