<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceSnmpSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_snmp_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            # SNMP Polling Settings
            $table->unsignedSmallInteger('snmp_rediscovery_interval')->default(1440);
            $table->unsignedSmallInteger('snmp_poll_interval')->default(5);
            # SNMP Basic Settings
            $table->boolean('snmp_use_64_bit_counters')->default(true);
            $table->string('snmp_version', 3)->default('v2c');
            $table->unsignedTinyInteger('snmp_port')->default(161);
            $table->unsignedTinyInteger('snmp_retries')->default(3);
            $table->unsignedTinyInteger('snmp_timeout')->default(10);
            # SNMP V2 Settings
            $table->string('snmp_read_community', 64)->nullable();
            $table->string('snmp_write_community', 64)->nullable();
            # SNMP V3 Settings
            $table->string('snmp_security_level', 10)->nullable();
            $table->string('snmp_security_name', 64)->nullable();
            $table->string('snmp_authentication_protocol', 10)->nullable();
            $table->string('snmp_authentication_password', 64)->nullable();
            $table->string('snmp_privacy_protocol', 10)->nullable();
            $table->string('snmp_privacy_password', 64)->nullable();

            $table->foreign('device_id')
                ->references('id')
                ->on('devices')
                ->cascadeOnDelete();
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
        Schema::dropIfExists('device_snmp_settings');
    }
}
