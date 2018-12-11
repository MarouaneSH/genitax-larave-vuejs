<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OutilsTarifsFiscalCategory extends Model
{
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
