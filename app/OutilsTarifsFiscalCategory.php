<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;

class OutilsTarifsFiscalCategory extends Model
{


  use Searchable;

   protected $indexConfigurator = TarifCategoryIndexConfigurator::class;

   public $timestamps = null;

    // protected $table = 'outils_mytable';

   protected $mapping = [
        'properties' => [
            'titre' => [
                'type' => 'text',
                'analyzer' => 'english',
            ],
        ]
    ];


    public function parent()
    {
        return $this->belongsTo('App\OutilsTarifsFiscalCategory', 'parent_id');
    }

    public function parent_child()
    {
        return $this->hasMany('App\OutilsTarifsFiscalCategory', 'parent_id')->with("articles:id,categorie_id");
    }

    // recursive, loads all descendants
    public function children()
    {
         return $this->parent_child()->with('children:id,parent_id,titre,icon_type',"children.articles:id,categorie_id")->orderBy("level");
    }

    public function articles() {
        return $this->hasMany('App\OutilsTarifsFiscalArticle',"categorie_id");
    }
}
