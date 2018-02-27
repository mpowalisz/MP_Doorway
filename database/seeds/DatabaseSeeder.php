<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // This is commented out in new Laravel projects.
        $this->call(UsersTableSeeder::class);
    }
}
