<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbDbtablesFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_dbtables_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dbtable_id');
            $table->integer('orderid');
            $table->string('title', 255);
            $table->string('type', 255);
            $table->integer('len');
            $table->string('default', 255);
            $table->string('default_value', 255);
            $table->integer('is_null')->default(0);
            $table->integer('is_index')->default(0);
            $table->tinyInteger('translate')->default(0);
            $table->tinyInteger('trans_field')->default(0);

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
        Schema::dropIfExists('bb_dbtables_fields');
    }
}
