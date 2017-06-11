<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_config', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('crated_on')->useCurrent();
            $table->string('title');
            $table->string('type');
            $table->string('sid');
            $table->text('value');
            $table->text('en_value');
            $table->text('de_value');

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
        Schema::dropIfExists('bb_config');
    }
}
