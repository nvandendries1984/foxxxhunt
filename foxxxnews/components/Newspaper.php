<?php namespace Foxxxhunt\Foxxxnews\Components;

use Cms\Classes\ComponentBase;

class Newspaper extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Newspaper Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $newsItems = \Foxxxhunt\Foxxxnews\Models\NewsItems::all();
        $this->page['newsItems'] = $newsItems;
    }
}
