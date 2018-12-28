<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\CgiTaxLocale;
use App\ArticleCirculaire;
use App\Faq;
use App\QuestionResponse;
use App\Info;
use App\OutilsNomenclature;
use App\OutilsCoefficient;
use App\OutilsTarifsFiscalCategory;
use App\OutilsTarifsFiscalArticle;
use App\Outil;

class ApiController extends Controller
{

    public function recursive($cat,&$counter) {
        $parent = $cat->parent;
       
        if($parent){
            $counter++;
            return  $this->recursive($parent,$counter);
        } 
        return $counter;
    }
 
    public function test() {
        $counter = 0;
        foreach(Category::all() as $cat) {
            $nbr_parent = $this->recursive($cat,$counter);
            if($nbr_parent <=5) {
                $cat->icon_type = $nbr_parent;
                $cat->save();
            } else {
                $cat->icon_type = 5;
                $cat->save();
            }
            if(!$cat->children) {
                $cat->icon_type = 5;
                $cat->save();
            }
            $counter = 0;
        }
    }


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
        $articles->select("contenu_html_$type as content_html","categorie_id","id","num_$type");
        $articles->with("category:id,titre");

        return response()->json(["article" => $articles->first()]);
    }

    public function getArticleByNum($num,$type,$category) {
        $article = ArticleCirculaire::select("contenu_html_$type as content_html","categorie_id","id","num_$type")
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


    public function searchArticle($query,$type_search) {
        
        $type_search = ($type_search == "cgi") ? 1 : 2;

        $matching_category = Category::search($query)->get()->pluck("id");
        $matching_articles = ArticleCirculaire::search($query)->get()->pluck("categorie_id");
        $all_matching = $matching_category->merge($matching_articles);

        $articles = Category::whereIn("id", $all_matching->unique())
                    ->with("articles:id,categorie_id")
                    ->whereHas('articles')
                    ->where("cgi_taxlocale_id",$type_search)
                    ->get();
    
        return response()->json(["search_result" => $articles]);
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
    
    public function search_question($query) {
        $question = QuestionResponse::search($query)->get();
        return response()->json(["search_result" => $question]);
    }


    public function infos() {
        $info = Info::first();
        return response()->json(["info" => $info]);
    }


    public function outils() {
        $outils = Outil::all();
        return response()->json(["outils" => $outils]);
    }


    public function coefficients() {
        $coefficients = OutilsCoefficient::all();
        return response()->json(["coefficients" => $coefficients]);
    }

    public function nomenclatures() {
        $nomenclature = OutilsNomenclature::all();
        return response()->json(["nomenclature" => $nomenclature]);
    }
    

    public function tarifFiscal() {
        //
        $categories = OutilsTarifsFiscalCategory::select("id","parent_id","titre","level","icon_type")
                    ->with('children:id,parent_id,titre,level,icon_type')
                    ->orderBy("level")
                    ->whereNull("parent_id")
                    ->get();
        return response()->json(["categories" =>$categories]);
        
    }
    
    public function tarifFiscal_artilce($id) {
        $articles = OutilsTarifsFiscalArticle::where("id",$id);
        return response()->json(["article" => $articles->first()]);
    }
    
}
