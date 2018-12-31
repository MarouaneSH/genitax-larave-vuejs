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

Route::get('/ss', function () {
    foreach(App\Category::all() as $cat) {

        foreach($cat->children->sortBy("titre") as $key => $ch) {
            $ch->level = $key + 1;
            $ch->save();
        }
    }
});



Route::get('testing',function() {
    
   foreach(App\Category::all() as $re) {
        $re->titre =  str_replace("?","'",$re->titre);
        $re->save();
   }
});

// Route::get('testing',function() {
    
//    foreach(App\ArticleCirculaire::all() as $re) {
      
//         $re->contenu_html_article = tidy_repair_string($re->contenu_html_article );
//        $re->save();
//    }
// });

//migration tarfi fiscal
// Route::get('/migrate',function() {
//         foreach(App\OutilsTarifsFiscalCategory::all() as $rec) {
            
//             $article = DB::connection("mysql2")->table('tbl_tarifFiscal')->where('id',$rec->aid)->first();
            
//             if( $article) {
//                 ini_set('pcre.backtrack_limit', 99999999999999999);
//                 $content_article = preg_replace('/article ([0-9]{1,4})/', '<a href="article/${1}">article ${1}</a>' ,$article->txt);
//                 App\OutilsTarifsFiscalArticle::create([
//                     "categorie_id" => $rec->id,
//                     "contenu_html" => $content_article ,
//                 ]);
//             }
            
    
            
//         }
//     });


// migration LF 2017
// Route::get('/migrate',function() {
//     foreach(App\Category::whereBetween('id',[421, 491])->where("aid","!=", "0")->get() as $rec) {
        
//         $article = DB::connection("mysql2")->table('tbl_lf_2017')->where('id',$rec->aid)->first();
        
//         ini_set('pcre.backtrack_limit', 99999999999999999);
//         $content_article = preg_replace('/article ([0-9]{1,4})/', '<a href="article/${1}">article ${1}</a>' ,$article->article);
        

//         App\ArticleCirculaire::create([
//             "categorie_id" => $rec->id,
//             "num_article" => $rec->aid,
//             "contenu_html_article" => $content_article ,
//         ]);
//     }
// });


// migration cgi
// Route::get('/migrate',function() {
//     // dd(App\Category::whereBetween('id',[1, 419])->where("aid","!=", "0")->get()->pluck(["titre"]));
//     foreach(App\Category::whereBetween('id',[1, 419])->where("aid","!=", "0")->get() as $rec) {
        
//         $article = DB::connection("mysql2")->table('tbl_cgi')->where('aid',$rec->aid)->first();
//         $circ = DB::connection("mysql2")->table('tbl_circ')->where('aid', $article->aid)->first();
        
//         ini_set('pcre.backtrack_limit', 99999999999999999);
//         $content_article = preg_replace('/article ([0-9]{1,4})/', '<a href="article/${1}">article ${1}</a>' ,$article->cgi_article);
        
//         if($circ) $content_circulaire = preg_replace('/article ([0-9]{1,4})/', '<a href="article/${1}">article ${1}</a>' ,$circ->description);

//         App\ArticleCirculaire::create([
//             "categorie_id" => $rec->id,
//             "num_article" => $rec->aid,
//             "num_circulaire" => ($circ) ? $circ->aid : null,
//             "contenu_html_article" => $content_article ,
//             "contenu_html_circulaire"=> ($circ) ? $content_circulaire : null
//         ]);
//     }
// });

//migration taxe
// Route::get('/migrate',function() {

//     foreach(App\Category::where('id',">","586")->where("aid","!=", "0")->get() as $rec) {
        
//         $article = DB::connection("mysql2")->table('tbl_taxLocale')->where('aid',$rec->aid)->first();
//         $circ = DB::connection("mysql2")->table('tbl_circ_tl')->where('aid', $article->aid)->first();
        
//         ini_set('pcre.backtrack_limit', 99999999999999999);
//         $content_article = preg_replace('/article ([0-9]{1,4})/', '<a href="article/${1}">article ${1}</a>' ,$article->article);
        
//         if($circ) $content_circulaire = preg_replace('/article ([0-9]{1,4})/', '<a href="article/${1}">article ${1}</a>' ,$circ->description);

//         App\ArticleCirculaire::create([
//             "categorie_id" => $rec->id,
//             "num_article" => $rec->aid,
//             "num_circulaire" => ($circ) ? $circ->aid : null,
//             "contenu_html_article" => $content_article ,
//             "contenu_html_circulaire"=> ($circ) ? $content_circulaire : null
//         ]);
//     }
// });

// Route::get('/db2',function() {

//     foreach(DB::table('faqs')->get() as $faq) {
//         foreach(DB::connection('mysql2')->table("category_map")->where('cid' , $faq->id)->get() as $quest) {
//             $news = DB::connection('mysql2')->table("tbl_news")->where('nid' , $quest->nid)->first();
            
//             if($news) {
//                 $desc = $news->news_description;
//                 App\QuestionResponse::create([
//                     "faq_id" => $faq->id,
//                     "question" => $news->news_heading,
//                     "response" =>  strip_tags($desc, '<p><br>'),
//                     "created_at" => Carbon\Carbon::parse(str_replace(",","", $news->news_date))
//                 ]);
//             }
//         }
//     }

// });
// Route::get('/insert', function () {
//     foreach(App\Category::all() as $cat) {

//         DB::table('categories')->insert([
//             [
//             "id"=> $cat->id,
//             'parent_id' => $cat->parent_id,
//             'titre' => $cat->titre,
//             'aid' => $cat->aid,
//             'cgi_taxlocale_id' => $cat->cgi_taxlocale_id,
//             'icon_type' => $cat->icon_type,
//             'Level' => $cat->Level,
//             ]
//         ]);
//     }
// });






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
