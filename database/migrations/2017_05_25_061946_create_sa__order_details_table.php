<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sa__order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderId');
            $table->integer('productId');
            $table->string('productName');
            $table->float('productPrice', 10,2);
            $table->integer('productQuantity');
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
        Schema::drop('sa__order_details');
    }
}
