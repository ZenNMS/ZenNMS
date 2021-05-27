<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('display_name', 50);
            $table->string('asset_tag', 50)->nullable();
            $table->string('serial_number', 50)->nullable()->unique();
            $table->unsignedBigInteger('facility_id')->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->unsignedTinyInteger('u_height');
            $table->string('order', 1);
            $table->unsignedMediumInteger('inner_depth')->nullable();
            $table->unsignedMediumInteger('inner_width')->nullable();
            $table->unsignedMediumInteger('outer_depth')->nullable();
            $table->unsignedMediumInteger('outer_Height')->nullable();
            $table->unsignedMediumInteger('outer_width')->nullable();
            $table->string('notes', 255)->nullable();
            $table->string('tags')->nullable();
            $table->timestamps();

            $table->foreign('facility_id')
                ->references('id')
                ->on('facilities');
            $table->foreign('group_id')
                ->references('id')
                ->on('rack_groups');
            $table->foreign('role_id')
                ->references('id')
                ->on('rack_roles');
            $table->foreign('type_id')
                ->references('id')
                ->on('rack_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racks');
    }
}
