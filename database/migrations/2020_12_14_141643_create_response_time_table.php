<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_times', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('node_id');
            $table->timestamp('timestamp');
            $table->float('min_response_time', 8, 3)->nullable();
            $table->float('max_response_time', 8, 3)->nullable();
            $table->float('avg_response_time', 8, 3)->nullable();
            $table->float('mdev_response_time', 8, 3)->nullable();
            $table->integer('percent_loss')->nullable();
            $table->integer('percent_available')->nullable();
            $table->float('time_spent', 8, 3)->default(0);
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
        Schema::dropIfExists('response_times');
    }
}
