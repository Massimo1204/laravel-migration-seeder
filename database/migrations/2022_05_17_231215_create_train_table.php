<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 50);
            $table->string('destination_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->smallInteger('train_code')->unique();
            $table->tinyInteger('number_carriage');
            $table->boolean('in_time');
            $table->boolean('canceled');
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
        Schema::dropIfExists('train');
    }
}
