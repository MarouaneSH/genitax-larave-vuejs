<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CgiTaxLocale;
use App\ArticleCirculaire;

class ApiController extends Controller
{

    public function getHeaderCategory($type) {
        $type = ($type == "cgi") ? 1 : 2;
        $categories = Category::select("id","parent_id","titre","level","icon_type")
                    ->where("parent_id", null)
                    ->where("cgi_taxlocale_id" ,  $type)
                    ->get();
       return response()->json(["categories" =>$categories]);
    }
    public function getCategory($parent_id) {
        
        $categories = Category::select("id","parent_id","titre","level","icon_type")
                    ->with('children:id,parent_id,titre,level,icon_type')
                    ->where('parent_id',$parent_id)
                    ->orderBy("level")
                    ->get();
        return response()->json(["categories" =>$categories]);
    }

    public function getArticle($id,$type) {
        $articles = ArticleCirculaire::where("id",$id);
        if($type == "article") {
            $articles->select("contenu_html_article as content_html");
        } else {
            $articles->select("contenu_html_circulaire as content_html");
        }

        return response()->json(["article" => $articles->first()]);
    }

}
