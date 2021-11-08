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
        User::insert([
            [
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'email' => 'admin@admin.com',
                'address' => 'admin home',
                'phone_number'=> '085123123',
                'gender' => 'male'
            ],
            [
                'username' => 'user',
                'password' => bcrypt('user1234'),
                'email' => 'user@user.com',
                'address' => 'user home',
                'phone_number'=> '1231231',
                'gender' => 'male'
            ]
        ]);
    }
}
