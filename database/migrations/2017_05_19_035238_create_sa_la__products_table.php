<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaLaProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sa_la__products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productName');
            $table->integer('categoryId');
            $table->integer('manufacturerId');
            $table->float('productPrice', 10, 2);
            $table->integer('productQuantity');
            $table->text('productShortDescription');
            $table->text('productLongDescription');
            $table->text('productImage');
            $table->tinyInteger('publicationStatus');
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
        Schema::drop('sa_la__products');
    }
}
