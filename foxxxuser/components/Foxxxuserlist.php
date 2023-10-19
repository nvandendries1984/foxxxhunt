<?php namespace Foxxxhunt\Foxxxuser\Components;

use Cms\Classes\ComponentBase;
use RainLab\User\Models\User;

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
        return [];
    }

    public function onRun()
    {
        // Haal alle gebruikers op uit de "users" tabel
        $users = User::all();

        // Voeg de gebruikers toe aan de component-variabele
        $this->page['users'] = $users;
    }
}
