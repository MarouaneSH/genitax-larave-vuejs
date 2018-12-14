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


Route::get("ttt",function() {

       $soapClient = new \SoapClient("http://52.232.29.235/services.wsdl");
       $credentials = array('Username' => 'webad', 'Client' => 'P1', 'Password' => 'webad2017');

       $tmpResult = $soapClient->GetTemplateResultAsXML();

       dd($tmpResult);
       $SearchCriteriaProperties1 = array('ColumnName' => 'program_grp_id__1',
           'Description' => 'Etablissement',
           'RestrictionType' => "=",
           'FromValue' => strval($pole),
           'ToValue' => strval($pole),
           'DataType' => 10,
           'DataLength' => 25,
           'DataCase' => 2,
           'IsParameter' => true,
           'IsVisible' => true,
           'IsPrompt' => false,
           'IsMandatory' => false,
           'CanBeOverridden' => false,
           'RelDateCrit' => '');

       $SearchCriteriaPropertiesList = array($SearchCriteriaProperties1);

       $TemplateResultOptions = array(
           'ShowDescriptions' => true,
           'Aggregated' => true,
           'OverrideAggregation' => false,
           'CalculateFormulas' => true,
           'FormatAlternativeBreakColumns' => true,
           'RemoveHiddenColumns' => false,
           'Filter' => "",
           'FirstRecord' => -1,
           'LastRecord' => -1);

       $InputForTemplateResult = array('TemplateId' => '571',
           'TemplateResultOptions' => $TemplateResultOptions,
           'SearchCriteriaPropertiesList' => $SearchCriteriaPropertiesList,
           'PipelineAssociatedName' => '');

       $params3 = array('input' => $InputForTemplateResult, 'credentials' => $credentials);
       $tmpResult = $soapClient->GetTemplateResultAsXML($params3);

       $jsonresult = json_encode($tmpResult);

       $result = json_decode($jsonresult, true);

       $content = $result['GetTemplateResultAsXMLResult']['TemplateResult'];
       $xml = simplexml_load_string($content);

       return $xml;

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
