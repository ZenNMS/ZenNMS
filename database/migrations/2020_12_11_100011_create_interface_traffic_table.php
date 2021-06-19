<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterfaceTrafficTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interface_traffic', function (Blueprint $table) {
            $table->id();
            $table->timestamp('timestamp')->useCurrent();
            $table->unsignedBigInteger('interface_id');
            $table->unsignedBigInteger('in_bytes');
            $table->unsignedBigInteger('in_packets');
            $table->unsignedBigInteger('out_bytes');
            $table->unsignedBigInteger('out_packets');

            $table->foreign('interface_id')
                ->references('id')
                ->on('device_interfaces');

            $table->index(['timestamp', 'interface_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interface_traffic');
    }
}
