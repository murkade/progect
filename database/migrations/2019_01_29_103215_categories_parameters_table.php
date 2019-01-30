<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriesParametersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_parameters', function (Blueprint $table){
           $table->integer('category_id')->unsigned();
           $table->integer('parameter_id')->unsigned();
           $table->foreign('category_id')->references('id')->on('categories');
           $table->foreign('parameter_id')->references('id')->on('parameters');
           $table->primary(['category_id', 'parameter_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_parameters');
    }
}
