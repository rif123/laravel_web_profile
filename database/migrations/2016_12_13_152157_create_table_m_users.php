<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMUsers extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('name_user');
            $table->string('address_user');
            $table->string('phone_user');
            $table->string('password_user');
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
        Schema::drop('m_users');
    }
}
