<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbResourcesRefersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_resources_refers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resourceid');
            $table->string('field', 255);
            $table->string('model', 255);
            $table->string('field1', 255);
            $table->string('field2', 255);

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
        Schema::dropIfExists('bb_resources_refers');
    }
}
