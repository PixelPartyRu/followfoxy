<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbStatpagestable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_statpages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sid', 255);
            $table->timestamp('crated_on')->useCurrent();
            $table->string('title', 255);
            $table->text('text');
            $table->integer('z_can_delete')->default(1);
            $table->string('en_title', 255);
            $table->string('de_title', 255);
            $table->text('en_text');
            $table->text('de_text');
            $table->string('layout', 255)->default(null);

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
        Schema::dropIfExists('bb_statpages');
    }
}
