<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;
use ScoutElastic\Searchable;


class Category extends Model
{

    use Searchable;

   protected $indexConfigurator = TestIndexConfigurator::class;

   public $timestamps = null;

//    protected $table = 'ca_mytable';

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
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function parent_child()
    {
        return $this->hasMany('App\Category', 'parent_id')->with("articles:id,categorie_id,num_article,num_circulaire");
    }

    // recursive, loads all descendants
    public function children()
    {
         return $this->parent_child()->with('children:id,parent_id,titre,icon_type',"children.articles:id,categorie_id,num_article,num_circulaire")->orderBy("level");
    }

    public function articles() {
        return $this->hasMany('App\ArticleCirculaire',"categorie_id");
    }

    public function searchableAs()
    {
        return 'titre';
    }
    
}
