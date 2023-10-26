<?php namespace foxxxhunt\Foxxxblog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateFoxxxhuntFoxxxblogMessages extends Migration
{
    public function up()
    {
        Schema::table('foxxxhunt_foxxxblog_messages', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('foxxxhunt_foxxxblog_messages', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
