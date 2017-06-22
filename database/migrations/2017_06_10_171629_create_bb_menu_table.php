<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderid')->default(null);
            $table->integer('parentid')->default(null);
            $table->string('title', 45)->default(null);
            $table->string('controller', 45)->default(null);
            $table->string('action', 45)->default(null);
            $table->tinyInteger('visible')->nullable()->default(null);

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bb_menu');
    }
}
