<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sa__orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerId');
            $table->integer('shippingId');
            $table->float('orderTotal', 10, 2);
            $table->string('orderStatus')->default('pending');
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
        Schema::drop('sa__orders');
    }
}
