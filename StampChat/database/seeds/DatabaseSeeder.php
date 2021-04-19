<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ChatDataTableSeeder::class,
            DefaultStampDataSeeder::class
            //  $this->call(UploadStampDataSeeder::class);
        ]);
    }
}
