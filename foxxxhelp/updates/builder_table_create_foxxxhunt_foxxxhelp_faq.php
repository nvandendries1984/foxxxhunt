<?php namespace foxxxhunt\Foxxxhelp\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateFoxxxhuntFoxxxhelpFaq extends Migration
{
    public function up()
    {
        Schema::create('foxxxhunt_foxxxhelp_faq', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('question');
            $table->text('answer');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('foxxxhunt_foxxxhelp_faq');
    }
}
