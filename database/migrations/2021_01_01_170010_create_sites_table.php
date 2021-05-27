<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name', 50);
            $table->string('slug', 50);
            $table->string('description')->nullable();
            $table->string('site_color', 10)->nullable();
            $table->string('site_prefix', 10)->nullable();
            $table->unsignedTinyInteger('status')->default(0);
            $table->string('tags')->nullable();
            $table->string('timezone')->nullable();
            $table->double('gps_latitude', 10,7)->nullable();
            $table->double('gps_longitude', 10, 7)->nullable();
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
        Schema::dropIfExists('sites');
    }
}
