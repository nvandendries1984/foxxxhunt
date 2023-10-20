<?php namespace foxxxhunt\Foxxxuser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFoxxxhuntFoxxxuserFriends extends Migration
{
    public function up()
    {
        Schema::create('foxxxhunt_foxxxuser_friends', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->integer('friend_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('foxxxhunt_foxxxuser_friends');
    }
}
