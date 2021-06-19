<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceNeighboursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_neighbours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->string('TimeMark');
            $table->unsignedInteger('local_port_number');
            $table->unsignedInteger('index');
            $table->unsignedInteger('chassis_id_subtype');
            $table->string('chassis_id', 255);
            $table->unsignedInteger('port_id_subtype');
            $table->string('port_id', 255);
            $table->string('port_description', 255);
            $table->string('sys_name', 255);
            $table->string('sys_description', 255);
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
        Schema::dropIfExists('device_neighbours');
    }
}
