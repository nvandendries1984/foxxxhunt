<?php namespace Foxxxhunt\Foxxxuser\Components;

use Cms\Classes\ComponentBase;
use RainLab\User\Models\User as UserModel;
use Auth;
use Flash;
use Input;

class FoxxxProfile extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'FoxxxProfile',
            'description' => 'Displays the User Profile'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onUpdateProfile()
    {
        $user = UserModel::find(Auth::getUser()->id);

        // Update andere gebruikersgegevens zoals nickname, sex, enz.
        $user->nickname = post('nickname');
        $user->sex = post('sex');
        $user->account_type = post('account_type');
        $user->phone = post('phone');
        $user->location = post('location');

        // Verwerk de geüploade avatar
        $avatarFile = Input::file('avatar');

        if ($avatarFile) {
            $user->avatar = $avatarFile; // Wijs de nieuwe avatar toe aan de gebruiker
        }

        $user->save();

        // Geef een succesmelding
        Flash::success('Profiel bijgewerkt.');

        // Optioneel: Redirect de gebruiker ergens na het bijwerken van het profiel
        return redirect()->refresh();
    }
}