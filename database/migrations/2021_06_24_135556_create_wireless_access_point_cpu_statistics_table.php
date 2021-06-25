<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWirelessAccessPointCpuStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wireless_access_point_cpu_statistics', function (Blueprint $table) {
            $table->id();
            $table->dateTime('timestamp');
            $table->foreignUuid('wap_uuid')
                ->references('wap_uuid')
                ->on('wireless_access_points')
                ->cascadeOnDelete();
            $table->unsignedSmallInteger('current');
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
        Schema::dropIfExists('wireless_access_point_cpu_statistics');
    }
}
