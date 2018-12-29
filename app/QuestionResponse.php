<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ScoutElastic\Searchable;


class QuestionResponse extends Model
{
    use Searchable;

    protected $indexConfigurator = QuestionIndexConfigurator::class;

    public $guarded = [];
    
    protected $mapping = [
        'properties' => [
            'question' => [
                'type' => 'text',
                'analyzer' => 'french',
            ],
            'response' => [
                'type' => 'text',
                'analyzer' => 'french',
            ],
        ]
    ];
}
