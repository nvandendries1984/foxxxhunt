<?php namespace Foxxxhunt\Foxxxuser\Components;

use Cms\Classes\ComponentBase;
use Foxxxhunt\Foxxxuser\Models\UserModel;
use RainLab\User\Models\User;
use Auth;
use Flash;

class Foxxxusergalleryeditor extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Foxxxusergalleryeditor Component',
            'description' => 'Allows users to add and remove photos from their profile.'
        ];
    }

    public function onRun()
    {
        if (!Auth::check()) {
            // Gebruiker is niet ingelogd
            return;
        }
    
        $user = Auth::getUser(); // Haal de ingelogde gebruiker op
        $userModel = UserModel::find($user->id); // Vervang 'UserModel' met je daadwerkelijke UserModel-naam
    
        if (!$userModel) {
            // Gebruiker niet gevonden in de UserModel
            return;
        }
    
        $photos = $userModel->photos; // Gebruik de 'photos' relatie om foto's op te halen
    
        $this->page['photos'] = $photos; // Maak de foto's beschikbaar voor de view
    }

    public function onDeletePhoto()
    {
        if (!Auth::check()) {
            // Gebruiker is niet ingelogd
            return;
        }
    
        $user = Auth::getUser();
        $userModel = UserModel::find($user->id); // Vervang 'UserModel' met je UserModel-naam
    
        if (!$userModel) {
            // Gebruiker niet gevonden in de UserModel
            return;
        }
    
        $photoId = post('photoId'); // Verkrijg de ID van de te verwijderen foto via een POST-verzoek
    
        // Zoek de foto op basis van de ID
        $photo = $userModel->photos()->where('id', $photoId)->first();
    
        if ($photo) {
            // Verwijder de foto
            $photo->delete();

        Flash::success('Photo is deleted.');

        // Optioneel: vernieuw de pagina of voer andere acties uit
        return redirect()->refresh();
        }
    }
    
}
