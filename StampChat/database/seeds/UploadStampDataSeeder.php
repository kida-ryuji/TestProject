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
            // 'stamp_name' => '',
            'path' => 'upload_stamp/jib.png',
        ]);
    }
}
