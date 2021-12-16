<?php

use Illuminate\Database\Seeder;

class DefaultStampDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('default_stamp_data')->insert([
            [
                'stamp_name' => 'hanamaru',
                'count' => 1,
                'path' => '/default_stamp/hanamaru.png',
            ],

            [
                'stamp_name' => 'business_kigyousenshi',
                'count' => 1,
                'path' => '/default_stamp/business_kigyousenshi4.png',
            ],

            [
                'stamp_name' => 'chick_and_woman',
                'count' => 2,
                'path' => '/default_stamp/chick_and_woman.png',
            ],

            [
                'stamp_name' => 'dance_woman',
                'count' => 3,
                'path' => '/default_stamp/dance_woman.png',
            ],

            [
                'stamp_name' => 'yaruki_woman',
                'count' => 4,
                'path' => '/default_stamp/yaruki_woman.png',
            ],

            [
                'stamp_name' => 'game_yatsuatari',
                'count' => 5,
                'path' => '/default_stamp/game_yatsuatari.png',
            ],

            [
                'stamp_name' => 'banana',
                'count' => 7,
                'path' => '/default_stamp/banana.png',
            ],

            [
                'stamp_name' => 'jouhou_hanran',
                'count' => 0,
                'path' => '/default_stamp/jouhou_hanran.png',
            ],

            [
                'stamp_name' => 'naruto',
                'count' => 0,
                'path' => '/default_stamp/naruto.png',
            ],

            [
                'stamp_name' => 'sick_humster',
                'count' => 0,
                'path' => '/default_stamp/sick_humster.png',
            ],

            [
                'stamp_name' => 'Supprise_pig',
                'count' => 0,
                'path' => '/default_stamp/Supprise_pig.png',
            ]

        ]);
    }
}
