<?php namespace foxxxhunt\Foxxxuser\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class FoxxxUsersController extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'usermanager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('foxxxhunt.Foxxxuser', 'main-menu-item-user');
    }

}
