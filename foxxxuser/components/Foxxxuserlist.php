<?php namespace Foxxxhunt\Foxxxuser\Components;

use Cms\Classes\ComponentBase;
use RainLab\User\Models\User;
use Cms\Classes\Page;

class Foxxxuserlist extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Foxxxuserlist Component',
            'description' => 'List all users from RainLab User plugin.'
        ];
    }

    public function defineProperties()
    {
        return [
            'detailsPage' => [
                'title'       => 'Details Page',
                'description' => 'Select the page to display item details',
                'type'        => 'dropdown',
                'default'     => '',
                'options'     => $this->getPageOptions()
            ]
        ];
    }

    public function getPageOptions()
    {
        $pages = Page::listInTheme('foxxxhunt');
    
        $pageOptions = [];
    
        foreach ($pages as $page) {
            $pageOptions[$page->fileName] = $page->title;
        }
    
        return $pageOptions;
    }

    public function onRun()
    {
        // Haal alle gebruikers op uit de "users" tabel
        $users = User::all();

        // Voeg de gebruikers toe aan de component-variabele
        $this->page['users'] = $users;
    }
}
