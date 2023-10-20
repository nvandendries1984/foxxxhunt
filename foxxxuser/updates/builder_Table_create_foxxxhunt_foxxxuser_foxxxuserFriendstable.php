<?php namespace Foxxxhunt\Foxxxuser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFoxxxhuntFoxxxuserFoxxxuserFriendstable extends Migration
{
    public function up()
    {
        Schema::table('foxxxhunt_foxxxuser_foxxxuserfriendstable', function($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('friend_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('foxxx_userfriend_users');
            $table->foreign('friend_id')->references('id')->on('foxxx_userfriend_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('foxxxhunt_foxxxuser_foxxxuserfriendstable');
    }
};
