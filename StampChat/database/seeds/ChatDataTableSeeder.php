<?php

use Illuminate\Database\Seeder;

class ChatDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_data')->insert([
            'comment' => 'test',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
