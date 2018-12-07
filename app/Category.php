<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nestable\NestableTrait;


class Category extends Model
{


    // public function childs() {
    //     return $this->hasMany('App\Category','parent_id','id') ;
    // }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function parent_child()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }

    // recursive, loads all descendants
    public function children()
    {
         return $this->parent_child()->with('children:id,parent_id,titre',"children.articles:id,categorie_id")->orderBy("level");
    }

    public function articles() {
        return $this->hasMany('App\ArticleCirculaire',"categorie_id");
    }
}
