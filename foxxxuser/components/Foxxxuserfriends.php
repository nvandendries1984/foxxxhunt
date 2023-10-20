<?php namespace Foxxxhunt\Foxxxuser\Components;

use Cms\Classes\ComponentBase;
use Foxxxhunt\Foxxxuser\Models\UserModel;
use RainLab\User\Models\User;
use Auth;

class Foxxxuserfriends extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Foxxxuserfriends Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
