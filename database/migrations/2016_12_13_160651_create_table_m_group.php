<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMGroup extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_group', function (Blueprint $table) {
            $table->increments('id_group');
            $table->string('group_name', 100);
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
        Schema::drop('m_group');
    }
}
