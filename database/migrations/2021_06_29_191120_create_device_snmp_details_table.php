<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceSnmpDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_snmp_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->string('sys_descr', 255)->nullable();
            $table->string('sys_object_id', 255)->nullable();
            $table->unsignedBigInteger('sys_uptime')->nullable();
            $table->string('sys_contact', 255)->nullable();
            $table->string('sys_name', 255)->nullable();
            $table->string('sys_location', 255)->nullable();
            $table->unsignedSmallInteger('sys_services')->nullable();
            $table->timestamps();
        });

        Schema::table('device_snmp_details', function (Blueprint $table) {
            $table->foreign('device_id')
                ->references('id')
                ->on('devices')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_snmp_details');
    }
}
