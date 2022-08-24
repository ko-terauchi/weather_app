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
        Schema::create('prefectures', function (Blueprint $table) {
            $table->string('pref_name',10);
            $table->integer('pref_id');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('prefectures', function (Blueprint $table) {
            $table->string('pref_name',10)->nullable();
            $table->int('pref_id')->nullable();
            $table->timestamps('created_at');
        });
    }
};