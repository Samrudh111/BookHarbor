<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Dev',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => 9886442568,
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
    }
}
