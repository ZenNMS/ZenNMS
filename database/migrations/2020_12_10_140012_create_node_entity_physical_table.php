<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodeEntityPhysicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_entity_physical', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('node_id')->index();
            $table->foreign('node_id')
                ->references('id')->on('nodes');
            // Tabla SNMP entPhysical
            $table->unsignedInteger('ent_physical_index')->nullable();
            $table->string('descr', 255)->nullable();
            $table->string('vendor_type', 255)->nullable();
            $table->unsignedInteger('contained_in')->nullable();
            $table->unsignedInteger('class')->nullable(); // Deprecated
            $table->integer('parent_rel_pos')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('hardware_rev', 255)->nullable();
            $table->string('firmware_rev', 255)->nullable();
            $table->string('software_rev', 255)->nullable();
            $table->string('serial_num', 32)->nullable();
            $table->string('mfg_name', 255)->nullable();
            $table->string('mfg_date', 32)->nullable();
            $table->string('model_name', 255)->nullable();
            $table->string('alias', 32)->nullable();
            $table->string('asset_id', 32)->nullable();
            $table->unsignedTinyInteger('is_fru')->nullable();
            $table->string('uris', 255)->nullable();
            $table->string('uuid', 64)->nullable();
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
        Schema::dropIfExists('node_entity_physical');
    }
}
