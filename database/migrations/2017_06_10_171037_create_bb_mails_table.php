<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_mails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sid', 255)->unique();
            $table->string('title', 255);
            $table->text('description');
            $table->text('message');
            $table->string('from', 255);
            $table->string('to', 255);
            $table->string('theme', 255);
            $table->text('en_message');
            $table->text('de_message');
            $table->string('en_theme', 255);
            $table->string('de_theme', 255);
            $table->text('en_plaintext');
            $table->text('de_plaintext');
            $table->text('plaintext');

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
        Schema::dropIfExists('bb_mails');
    }
}
