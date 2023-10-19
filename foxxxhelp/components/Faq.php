<?php namespace Foxxxhunt\Foxxxhelp\Components;

use Cms\Classes\ComponentBase;
use Foxxxhunt\Foxxxhelp\Models\FAQmodel;

class Faq extends ComponentBase
{
    public $faq;
    public function componentDetails()
    {
        return [
            'name' => 'faq Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->faq = FAQmodel::get()->toArray();
    }
}
