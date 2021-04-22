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
                'stamp_name' => 'gibraltar',
                'path' => 'upload_stamp/gibraltar.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'stamp_name' => 'lifeline',
                'path' => 'upload_stamp/lifeline.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'stamp_name' => 'bloodhound',
                'path' => 'upload_stamp/bloodhound.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }
}
