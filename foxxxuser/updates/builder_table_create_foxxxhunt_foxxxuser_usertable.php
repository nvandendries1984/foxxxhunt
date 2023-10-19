<?php namespace foxxxhunt\Foxxxuser\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFoxxxhuntFoxxxuserUsertable extends Migration
{
    public function up()
    {
        Schema::create('foxxxhunt_foxxxuser_usertable', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('nickname');
            $table->string('sex');
            $table->string('location');
            $table->string('accoun_type');
            $table->string('phone');
            $table->string('mail');
            $table->string('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('foxxxhunt_foxxxuser_usertable');
    }
}
