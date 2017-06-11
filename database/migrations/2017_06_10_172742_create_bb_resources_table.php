<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resourceId', 255)->unique();
            $table->string('actionId', 255)->default('');
            $table->integer('parentid')->default(0);
            $table->integer('orderid')->default(0);
            $table->string('title', 255);
            $table->string('model', 255);
            $table->string('datatype', 255);
            $table->string('indexate', 255);
            $table->string('default_field', 255);
            $table->string('parent_field', 255);
            $table->string('order', 255);
            $table->string('group', 255);
            $table->integer('paginate');
            $table->integer('can_delete')->default(1);
            $table->integer('can_edit')->default(1);
            $table->integer('can_add')->default(1);
            $table->integer('delete_confirm')->default(1);
            $table->integer('delete_on_have_child')->default(0);
            $table->integer('sortable')->default(0);
            $table->string('sortable_position', 255);
            $table->integer('visible')->default(1);
            $table->integer('on_have_subcat')->default(1);
            $table->string('menu_image', 255)->default('');
            $table->text('description');
            $table->string('recursive_column')->default('');

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
        Schema::dropIfExists('bb_resources');
    }
}
