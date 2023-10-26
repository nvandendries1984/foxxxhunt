<?php namespace foxxxhunt\Foxxxnews;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function register()
    {
    }

    public function boot()
    {
    }

    public function registerComponents()
    {
        return [
            'Foxxxhunt\Foxxxnews\Components\Newspaper' => 'Newspaper'
        ];
    }

    public function registerSettings()
    {
    }
}
