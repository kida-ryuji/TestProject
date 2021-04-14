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
            'stamp_name' => 'stamp_1',
        //    'count' => ,
            'path' => 'https://4.bp.blogspot.com/-eiz3pMwWSdA/XAnvRTdDXfI/AAAAAAABQmk/qXFHPg9I4uwKQlqxMpnD-NO_W3XHHdCTwCLcBGAs/s200/business_man3_1_question.',
        ]);
    }
}
