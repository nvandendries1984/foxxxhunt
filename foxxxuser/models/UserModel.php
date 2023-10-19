<?php namespace foxxxhunt\Foxxxuser\Models;

use Model;
use RainLab\User\Models\User;
use RainLab\User\Models\Group;

class UserModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sluggable;

    protected $slugs = ['slug' => 'nickname'];
    
    protected $dates = ['deleted_at'];

    public $table = 'users';

    public $rules = [
    ];

    public $attachMany = [
        'photos' => \System\Models\File::class
    ];
}
