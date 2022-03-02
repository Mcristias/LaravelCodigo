<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         //\App\Models\User::factory(10)->create();
        //\App\Models\origins::factory(10)->create();
        \App\Models\countries::factory(10)->create();
        //\App\Models\categories::factory(10)->create();
        //\App\Models\wines::factory(10)->create();
    }
}
