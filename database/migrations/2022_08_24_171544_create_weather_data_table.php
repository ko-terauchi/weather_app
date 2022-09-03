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
            $table->bigIncrements('id');
            $table->integer('data_id');
            $table->integer('pref_id');
            $table->integer('icon_id');
            $table->string('name');
            $table->string('temp_max');
            $table->string('temp_min');
            $table->string('pressure');
            $table->string('humidity');
            $table->string('pop');
            $table->string('wind_spped');
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
        Schema::dropIfExists('weather_data');
    }
};
