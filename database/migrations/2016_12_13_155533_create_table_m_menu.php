<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMMenu extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_menu', function (Blueprint $table) {
            $table->increments('id_menu');
            $table->integer('level_menu');
            $table->integer('parent_menu');
            $table->integer('posisition_menu');
            $table->string('url_menu', 100);
            $table->string('name_menu', 100);
            $table->integer('creator');
            $table->dateTime('created');
            $table->integer('editor');
            $table->dateTime('edited');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('m_menu');
    }
}
