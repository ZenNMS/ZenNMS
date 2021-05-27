<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRackImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rack_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rack_id');
            $table->string('name');
            $table->string('path');
            $table->timestamps();

            $table->foreign('rack_id')
                ->references('id')
                ->on('racks')
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
        Schema::dropIfExists('rack_images');
    }
}
