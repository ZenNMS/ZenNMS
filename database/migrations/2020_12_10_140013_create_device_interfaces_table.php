<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceInterfacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_interfaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->integer('index');
            $table->string('name', 100);
            $table->string('alias', 100);
            $table->string('description', 255);
            $table->unsignedBigInteger('type_id');
            $table->unsignedInteger('speed');
            $table->integer('mtu');
            $table->string('physical_address');
            $table->boolean('link_up_down_trap');
            $table->integer('admin_status');
            $table->integer('operational_status');
            $table->unsignedBigInteger('last_change');

            $table->foreign('device_id')
                ->references('id')
                ->on('devices');
            $table->foreign('type_id')
                ->references('id')
                ->on('interface_type_definitions');

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
        Schema::dropIfExists('device_interfaces');
    }
}
