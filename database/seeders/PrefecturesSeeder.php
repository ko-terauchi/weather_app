<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            ['pref_id' => 1, 'name' => '北海道'],
            ['pref_id' => 2, 'name' => '青森県'],
            ['pref_id' => 3, 'name' => '岩手県'],
            ['pref_id' => 4, 'name' => '宮城県'],
            ['pref_id' => 5, 'name' => '秋田県'],
            ['pref_id' => 6, 'name' => '山形県'],
            ['pref_id' => 7, 'name' => '福島県'],
            ['pref_id' => 8, 'name' => '茨城県'],
            ['pref_id' => 9, 'name' => '栃木県'],
            ['pref_id' => 10, 'name' => '群馬県'],
            ['pref_id' => 11, 'name' => '埼玉県'],
            ['pref_id' => 12, 'name' => '千葉県'],
            ['pref_id' => 13, 'name' => '東京都'],
            ['pref_id' => 14, 'name' => '神奈川県'],
            ['pref_id' => 15, 'name' => '新潟県'],
            ['pref_id' => 16, 'name' => '富山県'],
            ['pref_id' => 17, 'name' => '石川県'],
            ['pref_id' => 18, 'name' => '福井県'],
            ['pref_id' => 19, 'name' => '山梨県'],
            ['pref_id' => 20, 'name' => '長野県'],
            ['pref_id' => 21, 'name' => '岐阜県'],
            ['pref_id' => 22, 'name' => '静岡県'],
            ['pref_id' => 23, 'name' => '愛知県'],
            ['pref_id' => 24, 'name' => '三重県'],
            ['pref_id' => 25, 'name' => '滋賀県'],
            ['pref_id' => 26, 'name' => '京都府'],
            ['pref_id' => 27, 'name' => '大阪府'],
            ['pref_id' => 28, 'name' => '兵庫県'],
            ['pref_id' => 29, 'name' => '奈良県'],
            ['pref_id' => 30, 'name' => '和歌山県'],
            ['pref_id' => 31, 'name' => '鳥取県'],
            ['pref_id' => 32, 'name' => '島根県'],
            ['pref_id' => 33, 'name' => '岡山県'],
            ['pref_id' => 34, 'name' => '広島県'],
            ['pref_id' => 35, 'name' => '山口県'],
            ['pref_id' => 36, 'name' => '徳島県'],
            ['pref_id' => 37, 'name' => '香川県'],
            ['pref_id' => 38, 'name' => '愛媛県'],
            ['pref_id' => 39, 'name' => '高知県'],
            ['pref_id' => 40, 'name' => '福岡県'],
            ['pref_id' => 41, 'name' => '佐賀県'],
            ['pref_id' => 42, 'name' => '長崎県'],
            ['pref_id' => 43, 'name' => '熊本県'],
            ['pref_id' => 44, 'name' => '大分県'],
            ['pref_id' => 45, 'name' => '宮崎県'],
            ['pref_id' => 46, 'name' => '鹿児島県'],
            ['pref_id' => 47, 'name' => '沖縄県'],
        ]);
    }
}