<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMRole extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_role', function (Blueprint $table) {
            $table->increments('id_role_increments');
            $table->integer('id_role');
            $table->integer('id_menu');
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
        Schema::drop('m_role');
    }
}
