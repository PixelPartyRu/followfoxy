<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('locale', 100);
            $table->integer('main')->default(0);
            $table->string('name', 255);
            $table->string('flag', 255);
            $table->integer('default_country')->foreign('default_country')->references('id')->on('country');
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
        Schema::dropIfExists('bb_languages');
    }
}
