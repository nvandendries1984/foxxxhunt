<?php namespace Author\PluginName\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateRainlabUserTable extends Migration
{
    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('nickname')->nullable();
            $table->string('sex')->nullable();
            $table->string('location')->nullable();
            $table->string('account_type')->nullable();
            $table->string('phone')->nullable();
            $table->string('slug')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('nickname');
            $table->dropColumn('sex');
            $table->dropColumn('location');
            $table->dropColumn('account_type');
            $table->dropColumn('phone');
            $table->dropColumn('slug');
        });
    }
}
