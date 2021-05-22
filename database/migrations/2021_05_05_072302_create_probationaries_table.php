<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProbationariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('probationaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('makehoach')->unsigned();
            $table->string('hoten');
            $table->date('ngaybatdau');
            $table->date('ngayketthuc');
            $table->string('ketqua');
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
        Schema::dropIfExists('probationaries');
    }
}