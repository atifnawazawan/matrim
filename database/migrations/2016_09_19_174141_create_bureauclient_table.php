<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBureauclientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bclients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name');
            $table->string('photo');
            $table->date('age');
            $table->string('gender');
            $table->string('description');
            $table->string('phone');
            $table->string('profession');
            $table->string('education');
            $table->date('req_age');
            $table->string('req_profession');
            $table->string('req_description');
            $table->string('req_education');
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
        Schema::drop('bclients');
    }
}
