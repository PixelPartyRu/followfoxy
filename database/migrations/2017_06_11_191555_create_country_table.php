<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->default(null);
            $table->string('en_name', 255)->default(null);
            $table->string('code', 2)->default(null);
            $table->string('de_name', 255)->default(null);
            $table->integer('main')->default(0);
            $table->integer('default')->default(0);
            $table->integer('active')->default(1);
            $table->integer('big_city');
            $table->integer('time_shift')->default(0);
            $table->integer('phone_code')->default(0);
            $table->string('uri_id_country', 255)->default('');

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
        Schema::dropIfExists('country');
    }
}
