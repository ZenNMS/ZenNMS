<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterfaceDiscardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interface_discards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('interface_id');
            $table->unsignedBigInteger('in_discards');
            $table->unsignedBigInteger('out_discards');
            $table->timestamp('created_at')
                ->useCurrent();

            $table->foreign('interface_id')
                ->references('id')
                ->on('node_interfaces');

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
        Schema::dropIfExists('interface_discards');
    }
}
