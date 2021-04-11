<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RouteVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_vehicle', function (Blueprint $table) {

            $table->foreignId('vehicle_id');

            $table->foreignId('route_id');

            $table->foreign('vehicle_id')->references('id')->on('vehicles')

                ->onDelete('cascade');

            $table->foreign('route_id')->references('id')->on('routes')

                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_vehicle');
    }
}
