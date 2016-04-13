<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Congtrinh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congtrinh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten',50);
            $table->string('chudautu',30);
            $table->string('diadiem',30);
            $table->tinyInteger('sophong');
            $table->string('mota');
            $table->string('images',100);
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
        Schema::drop('congtrinh');
    }
}
