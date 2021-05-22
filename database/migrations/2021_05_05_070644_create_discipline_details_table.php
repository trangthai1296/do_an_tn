<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplineDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipline_details', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('manhanvien')->unsigned();
            $table->string('lydo');
            $table->timestamps();
            $table->primary(['id', 'manhanvien']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discipline_details');
    }
}