<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CgiTaxLocale;
use App\ArticleCirculaire;
use App\Faq;
use App\QuestionResponse;
use App\Info;

class ApiController extends Controller
{

    public function cgiHeaderCategories() {
        $categories = Category::select("id","parent_id","titre","level","icon_type")
                    ->where("parent_id", null)
                    ->where("cgi_taxlocale_id" , 1)
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


    public function getTaxesCategories() {
       $taxes_locales_id = Category::whereNull("parent_id")->where("cgi_taxlocale_id",2)->first()->id;
       return $this->getCategory( $taxes_locales_id);
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

    public function getArticleByNum($num,$type,$category) {
        $article = ArticleCirculaire::select("contenu_html_$type as content_html","categorie_id","id")
                   ->where(function($query) use($num){
                       $query->where("num_article",$num);
                       $query->orWhere("num_circulaire",$num);
                   })
                   ->whereHas("category",function($query) use($category) {
                        if($category == "cgi") {
                            $query->where("cgi_taxlocale_id",1);
                        } else{
                            $query->where("cgi_taxlocale_id",2);
                        }
                    })
                   ->with("category:id,titre")

                   ->first();

         return response()->json(["article" => $article]);
    }


    public function faqs() {
        $faqs = Faq::all();
        return response()->json(["faqs" => $faqs]);
    }

    public function faqs_questions($id) {
        $questions = QuestionResponse::select("faq_id","id","question","created_at")->where("faq_id",$id)->orderByDesc("created_at")->get();
        return response()->json(["questions" => $questions]);
    }

    public function question($id) {
        $question = QuestionResponse::select("response","question")->find($id);
        return response()->json(["question" => $question]);
    }


    public function infos() {
        $info = Info::first();
        return response()->json(["info" => $info]);
    }

}
