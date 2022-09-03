<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeatherDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_data')->insert([
            'data_id' => '1',
            'pref_id' => '1',
            'icon_id' => "1",
            'name' => '晴天',
            'temp_max' => '21.1',
            'temp_min' => '10.2',
            'pressure' => '1012',
            'humidity' => '90',
            'pop' => '30',
            'wind_spped' => '2.4',
            'created_at' => '2022-08-31 19:04:54',
            'updated_at' => '2022-08-31 19:04:54',
        ]);
    }
}
