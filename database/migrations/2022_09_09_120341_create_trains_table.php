<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("agency");
            $table->string("station_start");
            $table->string("station_arrive");
            $table->date("time_start");
            $table->date("time_arrive");
            $table->string("train_code");
            $table->tinyInteger("num_wagons");
            $table->boolean("is_in_time");
            $table->boolean("is_deleted");
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
        Schema::dropIfExists('trains');
    }
}
