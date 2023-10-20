<?php namespace Foxxxhunt\Foxxxuser\Components;

use Cms\Classes\ComponentBase;
use RainLab\User\Models\User;
use Auth;

class Foxxxuserdetails extends ComponentBase
{
    public $userDetails;
    public function componentDetails()
    {
        return [
            'name' => 'Foxxxuserdetails Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'Item Slug',
                'description' => 'Slug of the item to display details for',
                'type' => 'string',
                'default' => '{{ :slug }}'
            ]
        ];
    }

    public function onRun()
    {
        $slug = $this->property('slug');
    
        // Ophalen van de gebruikersgegevens met behulp van de slug
        $userDetails = User::where('slug', $slug)->first();
    
        if ($userDetails) {
            $this->page['userDetails'] = $userDetails;
        } else {
            // Gebruiker niet gevonden, je kunt hier een foutmelding instellen of een redirect uitvoeren.
        }
    }
}
