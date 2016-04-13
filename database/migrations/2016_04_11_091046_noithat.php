<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Noithat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noithat', function (Blueprint $table) {
            $table->string('manoithat',10);
            $table->string('ten',100);
            $table->string('mota');
            $table->string('image',100);
            $table->text('noidung');
            $table->primary('manoithat');
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
        Schema::drop('noithat');
    }
}
