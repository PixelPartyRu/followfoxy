<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbResourcesFormsParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_resources_forms_params', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('formid');
            $table->string('title', 255);
            $table->text('value');
            $table->integer('is_eval')->default(0);

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
        Schema::dropIfExists('bb_resources_forms_params');
    }
}
