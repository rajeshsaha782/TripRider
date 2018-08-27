<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiderRequestedTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rider_requested_trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('driver_id');
            $table->string('from');
            $table->string('to');
            $table->string('car_type');
            $table->string('trip_type');
            $table->float('cost',10,2);
            $table->float('start_latitude',12,10);
            $table->float('start_longitude',12,10);
            $table->float('end_latitude',12,10);
            $table->float('end_longitude',12,10);

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
        Schema::dropIfExists('rider_requested_trips');
    }
}
