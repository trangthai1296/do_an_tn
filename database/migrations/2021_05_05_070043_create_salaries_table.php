<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manhanvien')->unsigned();
            $table->integer('mabangchamcong')->unsigned();
            $table->decimal('luonghanhchinh', 10, 2);
            $table->decimal('luongtangca', 10, 2);
            $table->decimal('khautru', 10, 2);
            $table->decimal('thuclinh', 10, 2);
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
        Schema::dropIfExists('salaries');
    }
}