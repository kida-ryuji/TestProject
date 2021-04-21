<?php

use Illuminate\Database\Seeder;

class UploadStampDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upload_stamp_data')->insert([
            [
                'stamp_name' => 'gibraltar.png',
                'path' => 'upload_stamp/gibraltar.png',
            ],
            [
                'stamp_name' => 'lifeline.png',
                'path' => 'upload_stamp/lifeline.png',
            ],
            [
                'stamp_name' => 'bloodhound.png',
                'path' => 'upload_stamp/bloodhound.png',
            ]
        ]);
    }
}
