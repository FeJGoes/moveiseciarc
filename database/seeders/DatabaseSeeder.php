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
            'name' => 'Felipe J. de Góes',
            'email' => 'felipe.92goes@gmail.com',
            'active' => true,
            'password' => 'Abc102030*'
        ]);
    }
}
