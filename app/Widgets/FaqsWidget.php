<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Faq;


class FaqsWidget extends BaseDimmer
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
        $count = Faq::count();
        $string = trans_choice('voyager::dimmer.page', $count);

        
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-question',
            'title'  => "{$count} Faq",
            'text'   => "Vous avez $count Faq locale enregistrées. Cliquez sur le bouton ci-dessous pour afficher toutes les Faq locales.            ",
            'button' => [
                'text' => "Voir toutes les Faq locales",
                'link' => route('voyager.faqs.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
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
