<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_parameters', function (Blueprint $table){
            $table->integer('product_id')->unsigned();
            $table->integer('parameter_id')->unsigned();
            $table->integer('specification_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('parameter_id')->references('id')->on('parameters');
            $table->primary(['product_id', 'parameter_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_parameters');
    }
}
