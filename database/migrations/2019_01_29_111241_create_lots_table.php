<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('author_id')->unsigned();
            $table->double('priceStart', 10, 2);
            $table->double('priceStep', 10, 2);
            $table->text('description');
            $table->string('location', 255);
            $table->string('delivery', 255);
            $table->string('payment', 255);
            $table->string('img', 255);
            $table->timestamps();
            $table->dateTime('finish_at');
            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lots');
    }
}
