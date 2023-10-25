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

    public function beforeSave()
    {
        if (!$this->token) {
            // Als er geen token is ingesteld, genereer er een
            $this->token = $this->generateUniqueToken();
        }
    }
    
    private function generateUniqueToken()
    {
        $token = str_random(32); // Genereer een willekeurige token van 32 tekens
        
        // Controleer of de token al bestaat in de database
        while (User::where('token', $token)->exists()) {
            $token = str_random(32); // Genereer opnieuw als de token al bestaat
        }
    
        return $token;
    }
}
