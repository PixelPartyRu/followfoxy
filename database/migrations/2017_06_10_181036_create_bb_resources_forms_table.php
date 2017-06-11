<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbResourcesFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_resources_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resourceid');
            $table->integer('orderid');
            $table->string('type', 255);
            $table->string('field', 255);
            $table->string('label', 255);
            $table->integer('required')->default(0);
            $table->string('value', 255);
            $table->text('description');
            $table->integer('only_for_root')->default(0);
            $table->text('show_check');
            $table->integer('is_file')->default(0);

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
        Schema::dropIfExists('bb_resources_forms');
    }
}
