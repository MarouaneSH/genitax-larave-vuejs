<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use ScoutElastic\Searchable;
class OutilsTarifsFiscalArticle extends Model
{
    protected $guarded = [];   


    use Searchable;
    protected $indexConfigurator = TarifIndexConfigurator::class;

    protected $mapping = [
        'properties' => [
            'contenu_html' => [
                'type' => 'text',
                'analyzer' => 'english',
            ],
        ]
    ];
}
