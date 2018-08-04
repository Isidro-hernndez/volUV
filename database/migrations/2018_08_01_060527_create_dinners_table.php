<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinners', function (Blueprint $table) {
          $table->increments('id');
          $table->string('address');
          $table->string('phone');
          $table->string('name');
          $table->timestamps();
        });

        Schema::table('users', function($table) {
          $table->integer('dinner_id')->unsigned()->nullable(true);
          $table->foreign('dinner_id')->references('id')->on('dinners')->onDelete('set null');
   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dinners');
    }
}
