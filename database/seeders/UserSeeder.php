<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $master = User::create([
            'username' => 'Master',
            'email' => 'balaippa01@gmail.com',
            'password' => bcrypt('balai5ppa'),
        ]);

        $master->assignRole('admin');

        $admin = User::create([
            'username' => 'Admin',
            'email' => 'cuiyyy@gmail.com',
            'password' => bcrypt('fjhfuyrfiutrk875t')
        ]);

        $admin->assignRole('admin');

    }
}
