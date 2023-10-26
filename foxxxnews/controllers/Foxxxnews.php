<?php namespace foxxxhunt\Foxxxnews\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Foxxxnews extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('foxxxhunt.Foxxxnews', 'main-menu-item-foxxxnews');
    }

}
