<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('from');
            $table->string('to');
            $table->integer('tripLength');
            $table->text('description');
            $table->string('car_type');
            $table->string('trip_type');
            $table->integer('driver_id');
            $table->integer('total_sits');
            $table->float('total_cost',10,2);
            $table->string('image');
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
        Schema::dropIfExists('packages');
    }
}
