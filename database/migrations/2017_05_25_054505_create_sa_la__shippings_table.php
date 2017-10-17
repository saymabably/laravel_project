<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaLaShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sa_la__shippings', function (Blueprint $table) {
             $table->increments('id');
             $table->string('fullName');
            $table->string('emailAddress');
            $table->text('address');
            $table->string('phoneNumber');
            $table->string('districtName');
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
        Schema::drop('sa_la__shippings');
    }
}
