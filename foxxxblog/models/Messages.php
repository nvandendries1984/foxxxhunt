<?php namespace foxxxhunt\Foxxxblog\Models;

use Model;

/**
 * Model
 */
class Messages extends Model
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
    public $table = 'foxxxhunt_foxxxblog_messages';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $belongsTo = [
        'user' => 'RainLab\User\Models\User',
    ];    

}
