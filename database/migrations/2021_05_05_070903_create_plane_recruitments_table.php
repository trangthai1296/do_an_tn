<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaneRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plane_recruitments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('machucvu')->unsigned();
            $table->integer('soluong');
            $table->string('mota');
            $table->datetime('ngaynaphoso');
            $table->datetime('ngayhethan');
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
        Schema::dropIfExists('plane_recruitments');
    }
}