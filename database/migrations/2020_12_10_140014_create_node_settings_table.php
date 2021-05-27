<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('node_id');
            # Default Poller
            $table->unsignedTinyInteger('engine_id')->default(1);
            # ICMP Settings
            $table->unsignedTinyInteger('icmp_count')->default(4);
            $table->unsignedTinyInteger('icmp_retries')->default(3);
            $table->unsignedTinyInteger('icmp_timeout')->default(100);
            $table->unsignedTinyInteger('icmp_check_interval')->default(1);
            # SNMP Basic Settings
            $table->unsignedSmallInteger('snmp_rediscovery_interval')->default(3600);
            $table->unsignedSmallInteger('snmp_poll_interval')->default(30);
            $table->boolean('snmp_use_64_bit_counters')->default(true);
            $table->string('snmp_version', 3)->default('v2c');
            $table->unsignedTinyInteger('snmp_port')->default(161);
            $table->unsignedTinyInteger('snmp_retries')->default(3);
            $table->unsignedTinyInteger('snmp_timeout')->default(10);
            # SNMP V2 Settings
            $table->string('snmp_read_community', 64)->nullable();
            $table->string('snmp_write_community', 64)->nullable();
            # SNMP V3 Settings
            $table->string('snmp_auth_level', 10)->nullable();
            $table->string('snmp_auth_name', 64)->nullable();
            $table->string('snmp_authentication_protocol', 10)->nullable();
            $table->string('snmp_authentication_password', 64)->nullable();
            $table->string('snmp_privacy_protocol', 10)->nullable();
            $table->string('snmp_privacy_password', 64)->nullable();
            # Data retention policy
            $table->boolean('keep_detailed_history')->default(false);
            $table->boolean('keep_trends_history')->default(false);
            $table->timestamps();

            $table->foreign('node_id')
                ->references('id')
                ->on('nodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('node_settings');
    }
}
