<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_addresses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('node_id');
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('street_name')->nullable();
            $table->unsignedSmallInteger('street_number')->nullable();
            $table->string('zip', 25)->nullable();
            $table->double('gps_latitude', 10,7)->nullable();
            $table->double('gps_longitude', 10, 7)->nullable();

            $table->foreign('node_id')
                ->references('id')
                ->on('nodes');

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
        Schema::dropIfExists('node_addresses');
    }
}
