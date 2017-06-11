<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_structure', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderid')->default(null);
            $table->integer('parentid')->default(null);
            $table->string('label', 255)->default(null);
            $table->string('uri', 255)->default(null);
            $table->string('module', 255)->default(null);
            $table->string('controller', 255)->default(null);
            $table->string('action', 255)->default(null);
            $table->string('params', 255)->default(null);
            $table->integer('visible')->default(1);

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
        Schema::dropIfExists('bb_structure');
    }
}
