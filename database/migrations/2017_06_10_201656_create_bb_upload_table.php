<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_upload', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('realname', 255);
            $table->string('path', 255);
            $table->string('name', 255)->default('');
            $table->tinyInteger('is_deleted')->default(0);

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
        Schema::dropIfExists('bb_upload');
    }
}
