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
        DB::table('default_stamp_data')->insert([
        //    'stamp_name' => 'stamp_1',
            'path' => '',
        ]);
    }
}
