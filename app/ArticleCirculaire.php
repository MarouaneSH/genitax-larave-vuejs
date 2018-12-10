<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ArticleCirculaire extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Category',"categorie_id");
    }

    
}
