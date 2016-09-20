<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('headline');
            $table->text('aboutme');
            $table->string('marital_status');
            $table->string('education_level');
            $table->string('subject_studied');
            $table->string('profession');
            $table->string('jobtitle');
            $table->string('first_language');
            $table->string('second_language');
            $table->string('citizenship');
            $table->string('country_of_origin');
            $table->string('income');
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
        Schema::drop('profiles');
    }
}
