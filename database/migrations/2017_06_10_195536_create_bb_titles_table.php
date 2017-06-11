<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderid');
            $table->string('uri', 1024);
            $table->string('title', 1024);
            $table->integer('title_block')->default(0);
            $table->string('description', 1024)->default(null);
            $table->integer('description_block')->default(0);
            $table->string('keywords', 1024)->default(null);
            $table->integer('keywords_block')->default(0);
            $table->string('elementH1', 255);

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
        Schema::dropIfExists('bb_titles');
    }
}
