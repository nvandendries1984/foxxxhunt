<?php namespace Foxxxhunt\Foxxxuser\Components;

use Cms\Classes\ComponentBase;
use Foxxxhunt\Foxxxuser\Models\UserModel;
use RainLab\User\Models\User;
use Auth;

class Foxxxusergallery extends ComponentBase
{
    public $foxxxusergallery;
    public function componentDetails()
    {
        return [
            'name' => 'Foxxxusergallery Component',
            'description' => 'Display a user gallery.'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'User Slug',
                'description' => 'Specify the user slug to display their gallery.',
                'type' => 'string',
                'default' => '{{ :slug }}',
            ]
        ];
    }

    public function onRun()
    {
        $slug = $this->property('slug');

        // Ophalen van de gebruikersgegevens met behulp van de slug
        $foxxxusergallery = UserModel::where('slug', $slug)->first();
            
        if ($foxxxusergallery) {
            $this->page['foxxxusergallery'] = $foxxxusergallery;
        } else {
            // Gebruiker niet gevonden, je kunt hier een foutmelding instellen of een redirect uitvoeren.
        }
    }
}
