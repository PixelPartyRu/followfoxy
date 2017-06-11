<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbResourcesColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_resources_columns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderid');
            $table->integer('resourceid');
            $table->string('title', 255);
            $table->string('width', 255);
            $table->string('field', 255);
            $table->integer('orderlink')->default(0);
            $table->text('template');
            $table->string('filter_query', 255);
            $table->text('filter_items');
            $table->text('eval');
            $table->integer('escape');
            $table->integer('on_have_subcat')->default(1);
            $table->integer('visible')->default(1);

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
        Schema::dropIfExists('bb_resources_columns');
    }
}
