<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('host_id')->nullable();
            $table->string('host_name')->nullable();
            $table->string('cluster_id')->nullable();
            $table->string('cluster_name')->nullable();
            $table->string('vc_name')->nullable();
            $table->integer('cpuMhz')->nullable();
            $table->integer('numCpuPkgs')->nullable();
            $table->integer('numCpuCores')->nullable();
            $table->integer('numCpuThreads')->nullable();
            $table->integer('memorySize')->nullable();
            $table->integer('numNics')->nullable();
            $table->string('cpuModel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosts');
    }
}
