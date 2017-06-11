<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login', 255);
            $table->string('password', 255);
            $table->integer('role_id');
            $table->integer('system')->default(1);
            $table->string('pic', 255);

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
        Schema::dropIfExists('bb_users');
    }
}
