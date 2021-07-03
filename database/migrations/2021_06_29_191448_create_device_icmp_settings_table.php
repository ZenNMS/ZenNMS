<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceIcmpSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_icmp_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->unsignedTinyInteger('icmp_count')->default(4);
            $table->unsignedTinyInteger('icmp_retries')->default(3);
            $table->unsignedTinyInteger('icmp_timeout')->default(100);
            $table->timestamps();

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
        Schema::dropIfExists('device_icmp_settings');
    }
}
