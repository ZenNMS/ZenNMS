<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNodeInterfacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_interfaces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('node_id');
            $table->integer('ifIndex');
            $table->string('ifName', 100);
            $table->string('ifAlias', 100);
            $table->string('ifDescription', 255);
            $table->smallInteger('ifType');
            $table->unsignedInteger('ifHighSpeed');
            $table->integer('ifMtu');
            $table->string('ifPhysAddress');
            $table->boolean('ifLinkUpDownTrapEnable');
            $table->integer('ifAdminStatus');
            $table->integer('ifOperStatus');
            $table->unsignedBigInteger('ifLastChange');

            $table->foreign('node_id')
                ->references('id')
                ->on('nodes');
            $table->foreign('ifType')
                ->references('id')
                ->on('interface_type_definitions');

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
        Schema::dropIfExists('node_interfaces');
    }
}
