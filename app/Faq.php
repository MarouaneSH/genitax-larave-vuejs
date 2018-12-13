<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;

class Faq extends Model
{
    use Searchable;

    protected $indexConfigurator = FaqIndexConfigurator::class;

   protected $mapping = [
        'properties' => [
            'titre_categories' => [
                'type' => 'text',
                'analyzer' => 'english',
            ],
        ]
    ];
}
