<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_data', function (Blueprint $table) {
            $table->string('pref_name',10);
            $table->dateTime('date_time');
            $table->string('icon',255);
            $table->string('name',10);
            $table->float('temp_max');
            $table->float('temp_min');
            $table->float('pop');
            $table->integer('pressure');
            $table->integer('humidity');
            $table->float('wind_speed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('weather_data', function (Blueprint $table) {
            $table->string('pref_name');
            $table->dateTime('date_time');
            $table->string('icon');
            $table->string('name');
            $table->float('temp_max');
            $table->float('temp_min');
            $table->float('pop');
            $table->integer('pressure');
            $table->integer('humidity');
            $table->float('wind_speed');
        });
    }
};
