<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Linhvuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linhvuc', function (Blueprint $table) {
            $table->string('malinhvuc',10);
            $table->string('ten',100);
            $table->string('mota');
            $table->string('image',100);
            $table->text('noidung');
            $table->primary('malinhvuc');
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
        Schema::drop('linhvuc');
        
    }
}
