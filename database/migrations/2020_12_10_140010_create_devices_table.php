<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();

            $table->string('hostname', 128);
            $table->string('display_name', 128);
            $table->string('ip_address')->nullable()->unique();
            $table->string('ipv6_address')->nullable()->unique();
            $table->boolean('is_dynamic_ip')->default(false);
            $table->string('dns')->nullable();
            $table->string('group', 50)->nullable();
            $table->unsignedInteger('type_id')->nullable();
            $table->unsignedInteger('vendor_id')->nullable();
            $table->string('asset_tag')->nullable();
            $table->boolean('is_rackable')->default(false);

            $table->string('polling_method')->nullable();

            # Status Info
            $table->unsignedTinyInteger('status')->nullable();
            $table->boolean('is_disabled')->default(false);
            $table->dateTime('disabled_until')->nullable();
            $table->boolean('is_ignored')->default(false);
            $table->dateTime('ignored_until')->nullable();
            $table->boolean('is_unmanaged')->default(false);
            $table->dateTime('unmanaged_from')->nullable();
            $table->dateTime('unmanaged_until')->nullable();

            # Statistics
            $table->timestamp('last_check')->nullable();
            $table->float('check_duration',  6, 4)->nullable();
            $table->timestamp('next_check')->nullable();
            $table->timestamp('last_discovery')->nullable();
            $table->float('discovery_duration', 6, 4)->nullable();
            $table->timestamp('next_discovery')->nullable();
            $table->timestamp('last_poll')->nullable();
            $table->float('poll_duration', 6, 4)->nullable();
            $table->timestamp('next_poll')->nullable();

            $table->timestamps();

            $table->foreign('vendor_id')
                ->references('id')
                ->on('private_enterprise_numbers')
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
        Schema::dropIfExists('devices');
    }
}
