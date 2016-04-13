<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Baivietnoithat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baivietnoithat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('manoithat',10);
            $table->foreign('manoithat')->references('manoithat')->on('noithat')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name',100);
            $table->string('mota');
            $table->string('image');
            $table->text('noidung');
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
        Schema::drop('baivietnoithat');
        
    }
}
