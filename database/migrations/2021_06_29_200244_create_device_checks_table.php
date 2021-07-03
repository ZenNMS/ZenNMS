<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->unsignedBigInteger('check_id');
            $table->unsignedInteger('frequency');
            $table->unsignedInteger('importance');
            $table->unsignedInteger('allowed_failures');
            $table->boolean('is_disabled')->default(false);
            $table->dateTime('disabled_from')->nullable();
            $table->dateTime('disabled_until')->nullable();
            $table->timestamp('last_check')->nullable();
            $table->float('check_duration',  6, 4)->nullable();
            $table->timestamp('next_check')->nullable();
            $table->timestamps();

            $table->foreign('device_id')
                ->references('id')
                ->on('devices')
                ->cascadeOnDelete();

            $table->foreign('check_id')
                ->references('id')
                ->on('checks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_checks');
    }
}
