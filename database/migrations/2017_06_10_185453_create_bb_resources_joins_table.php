<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbResourcesJoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_resources_joins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderid');
            $table->integer('resourceid');
            $table->string('model', 255);
            $table->string('condition', 255);
            $table->string('fields', 255);

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
        Schema::dropIfExists('bb_resources_joins');
    }
}
