<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatastoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datastores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ds_name')->nullable();
            $table->string('ds_id')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('freeSpace')->nullable();
            $table->integer('uncommitted')->nullable();
            $table->string('dc_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datastores');
    }
}
