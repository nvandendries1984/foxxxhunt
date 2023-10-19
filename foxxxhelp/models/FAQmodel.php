<?php namespace foxxxhunt\Foxxxhelp\Models;

use Model;

/**
 * Model
 */
class FAQmodel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'foxxxhunt_foxxxhelp_faq';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
