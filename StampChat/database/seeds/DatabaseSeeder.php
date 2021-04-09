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
         $this->call(UsersTableSeeder::class);
         $this->call(ChatDataTableSeeder::class);
        //  $this->call(DefaultStamDataSeeder::class);
        //  $this->call(UploadStamDataSeeder::class);
    }
}
