<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeatherIconsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_icons')->insert([
            ['icon_id' => '1', 'name' => '晴れ'],
            ['icon_id' => '2', 'name' => '曇り'],
            ['icon_id' => '3', 'name' => '雨'],
            ['icon_id' => '4', 'name' => '雪'],
        ]);
    }
}
