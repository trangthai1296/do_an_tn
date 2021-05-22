<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatives', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('manhanvien')->unsigned();
            $table->string('moiquanhe');
            $table->string('hoten');
            $table->string('diachi');
            $table->string('sdt');
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
        Schema::dropIfExists('relatives');
    }
}