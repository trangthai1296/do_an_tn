<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('machucvu')->unsigned();
            $table->decimal('luongcoban', 10, 2);
            $table->decimal('luongtangca', 10, 2);
            $table->decimal('BHYT', 10, 2);
            $table->decimal('BHXH', 10, 2);
            $table->decimal('phucap', 10, 2);
            $table->decimal('thaisan', 10, 2);
            $table->integer('thoihanhopdong');
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
        Schema::dropIfExists('contracts');
    }
}