<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVirtualMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtual_machines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dc_id')->nullable();
            $table->string('dc_name')->nullable();
            $table->string('vm_id')->nullable();
            $table->string('vm_name')->nullable();
            $table->string('vm_cpu')->nullable();
            $table->string('vm_men')->nullable();
            $table->string('vm_os')->nullable();
            $table->string('vc_name')->nullable();
            $table->string('vc_id')->nullable();
            $table->string('host_name')->nullable();
            $table->string('host_id')->nullable();
            $table->string('cluster_name')->nullable();
            $table->string('cluster_id')->nullable();
            $table->string('power_status')->nullable();
            $table->string('boottime')->nullable();
            $table->string('is_template')->nullable();
            $table->string('vmfolder')->nullable();
            $table->string('committed')->nullable();
            $table->string('uncommitted')->nullable();
            $table->string('unshared')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('virtual_machines');
    }
}
