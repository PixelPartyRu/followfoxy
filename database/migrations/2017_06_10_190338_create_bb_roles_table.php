<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('roleId', 255);
            $table->string('title', 255);
            $table->integer('system')->default(1);
            $table->integer('front_role')->default(0);

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
        Schema::dropIfExists('bb_roles');
    }
}
