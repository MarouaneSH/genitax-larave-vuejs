<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;

class Faq extends Model
{
    use Searchable;

    protected $indexConfigurator = TestIndexConfigurator::class;

   protected $mapping = [
        'properties' => [
            'titre' => [
                'type' => 'text',
                'analyzer' => 'english',
            ],
        ]
    ];
}
