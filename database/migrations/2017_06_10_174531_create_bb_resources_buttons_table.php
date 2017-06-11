<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbResourcesButtonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_resources_buttons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderid');
            $table->integer('resourceid');
            $table->string('title', 255);
            $table->text('url');
            $table->string('class', 255);

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
        Schema::dropIfExists('bb_resources_buttons');
    }
}
