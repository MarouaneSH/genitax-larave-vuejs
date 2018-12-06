<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\CGITaxLocale;


class TaxWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = CGITaxLocale::count();
        $string = trans_choice('voyager::dimmer.page', $count);

        
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} Tax locales",
            'text'   => "Vous avez $count Tax locale enregistrées. Cliquez sur le bouton ci-dessous pour afficher toutes les tax locales.            ",
            'button' => [
                'text' => "Voir toutes les Tax locales",
                'link' => route('voyager.cgi-tax-locales.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}
