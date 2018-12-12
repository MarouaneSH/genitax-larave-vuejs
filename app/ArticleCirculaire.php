<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;


class ArticleCirculaire extends Model
{
    use Searchable;
    protected $indexConfigurator = ArticleIndexConfigurator::class;

    protected $mapping = [
        'properties' => [
            'contenu_html_article' => [
                'type' => 'text',
                'analyzer' => 'english',
            ],
            'contenu_html_circulaire' => [
                'type' => 'text',
                'analyzer' => 'english',
            ],
        ]
    ];

    public function category()
    {
        return $this->belongsTo('App\Category',"categorie_id");
    }
    

    
}
