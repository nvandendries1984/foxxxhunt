<?php namespace foxxxhunt\Foxxxnews\Models;

use Model;

class NewsItems extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $table = 'foxxxhunt_foxxxnews_newsitems';

    public $rules = [
    ];

}
