<?php

namespace Database\Seeders;

use App\Models\Riddle;
use App\Models\User;
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
         User::factory(200)->create();
         Riddle::factory(120)->create();
    }
}
