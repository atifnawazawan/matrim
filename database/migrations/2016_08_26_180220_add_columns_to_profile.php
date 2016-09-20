<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
            $table->string('lastname',50);
            $table->string('gender',10);
            $table->string('first_name',50);
            $table->date('age');
            $table->string('country');
            $table->string('phone_no');
            $table->string('pro_create_by');
            $table->boolean('hide_pro')->default(0);
            $table->string('matri_time',8);
            $table->string('province',50);
            $table->string('city',50);
            $table->text('street');
            $table->string('postal_code',10);
            $table->string('born_country',50);
            $table->string('residence_type',25);
            $table->boolean('can_relocate')->default(0);
            $table->boolean('phone_protection')->default(0);
            $table->string('other_phone',33);










        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            //
        });
    }
}
