<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterfaceErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interface_errors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('interface_id');
            $table->unsignedBigInteger('in_errors');
            $table->unsignedBigInteger('out_errors');
            $table->timestamp('created_at')
                ->useCurrent();

            $table->foreign('interface_id')
                ->references('id')
                ->on('device_interfaces');

            $table->index(['interface_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interface_errors');
    }
}
