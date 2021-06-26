<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWirelessAccessPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wireless_access_points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->string('index', 32);
            $table->unsignedSmallInteger('entity_index');
            $table->uuid('wap_uuid')->unique();
            $table->string('name', 32);
            $table->string('physical_address', 17);
            $table->string('location');
            $table->unsignedTinyInteger('admin_status');
            $table->unsignedTinyInteger('led_status');
            $table->unsignedSmallInteger('power_status');
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->ipAddress('netmask')->nullable();
            $table->ipAddress('gateway')->nullable();
            $table->string('network_spectrum_interface', 32)->nullable();
            $table->string('boot_version')->nullable();
            $table->string('ios_version')->nullable();
            $table->string('software_version')->nullable();
            $table->unsignedInteger('uptime');
            $table->unsignedInteger('wapp_uptime');
            $table->unsignedInteger('wapp_join_uptime');
            $table->unsignedSmallInteger('max_client_limit');
            $table->unsignedTinyInteger('service_ssh_enabled');
            $table->unsignedTinyInteger('service_telnet_enabled');
            $table->timestamps();
        });

//        "bsnAPDot3MacAddress" => "A4:88:73:3E:0E:40",
//        "bsnAPNumOfSlots" => 2,
//        "bsnAPName" => "APA488.733C.01C8",
//        "bsnAPLocation" => "Palma",
//        "bsnAPMonitorOnlyMode" => 2,
//        "bsnAPOperationStatus" => 1,
//        "bsnAPSoftwareVersion" => "10.4.1.0",
//        "bsnAPBootVersion" => "1.1.2.4",
//        "bsnAPModel" => "CBW140AC-E",
//        "bsnAPSerialNumber" => "FGL2438L7WL",
//        "bsnAPIpAddress" => "192.168.10.250",
//        "bsnAPType" => 73,
//        "bsnAPIsStaticIP" => 1,
//        "bsnAPNetmask" => "255.255.255.0",
//        "bsnAPGateway" => "192.168.10.254",
//        "bsnAPStaticIPAddress" => "192.168.10.250",
//        "bsnAPBridgingSupport" => 1,
//        "bsnAPGroupVlanName" => "default-group",
//        "bsnAPIOSVersion" => "10.4.1.0",
//        "bsnAPCertificateType" => 1,
//        "bsnAPEthernetMacAddress" => "A4:88:73:3C:01:C8",
//        "bsnAPAdminStatus" => 1,

        Schema::table('wireless_access_points', function (Blueprint $table) {
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
        Schema::dropIfExists('wireless_access_points');
    }
}
