<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_details', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('makehoach')->unsigned();
            $table->integer('soluongcv');
            $table->integer('soluongdat');
            $table->integer('sovongpv');
            $table->date('ngayphongvan');
            $table->string('diadiem');
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
        Schema::dropIfExists('interview_details');
    }
}