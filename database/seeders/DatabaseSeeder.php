<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
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
        User::create([
            'name' => 'Fikri alfauzan',
            'username' => 'admin',
            'email' => 'aaalfauzan@gmail.com',
            'password' => bcrypt('123321'),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
