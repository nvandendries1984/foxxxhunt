<?php namespace Foxxxhunt\Foxxxblog\Components;

use Cms\Classes\ComponentBase;
use Auth;

class Foxxxblog extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Foxxxblog Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'perPage' => [
                'title' => 'Berichten per pagina',
                'description' => 'Het aantal berichten dat op elke pagina wordt weergegeven.',
                'default' => 10,
                'type' => 'string',
            ],
        ];
    }

    public function onRun()
    {
        // Haal de lijst met berichten op en maak deze beschikbaar voor de pagina
        $this->page['messages'] = \Foxxxhunt\Foxxxblog\Models\Messages::all();
    }

    
    public function onCreateMessage()
    {
        // Controleer of de gebruiker is ingelogd
        if (!Auth::check()) {
            Flash::error('Je moet ingelogd zijn om een bericht te plaatsen.');
            return;
        }
    
        // Haal het ingediende bericht op uit het post-data
        $message = post('message');
    
        // Maak een nieuw bericht aan en koppel deze aan de ingelogde gebruiker
        $newMessage = new \Foxxxhunt\Foxxxblog\Models\Messages;
        $newMessage->message = $message;
        $newMessage->user_id = Auth::getUser()->id;
        $newMessage->save();
    
        // Optioneel: Voeg hier validatie toe
    
        // Vernieuw de berichtenlijst
        $this->page['messages'] = \Foxxxhunt\Foxxxblog\Models\Messages::all();

        return redirect()->refresh();
    }
}
