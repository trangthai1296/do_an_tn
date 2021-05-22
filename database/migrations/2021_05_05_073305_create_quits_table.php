<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manhanvien')->unsigned();
            $table->string('lydo');
            $table->string('tinhtrang');
            $table->datetime('ngaynghi');
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
        Schema::dropIfExists('quits');
    }
}