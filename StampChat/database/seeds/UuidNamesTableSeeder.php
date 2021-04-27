<?php

use Illuminate\Database\Seeder;

class UuidNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uuid_names')->insert([
            [
                "uuid" => "162acb0e-de59-4d13-a9c5-e0dbff746cf3",
                "name" => "hanna",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        ]);
    }
}
