<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'Mayarinha',
            'email' => 'pequena@email.com',
            'active' => true,
            'password' => 'Abc102030*'
        ]);
    }
}
