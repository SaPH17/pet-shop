<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin123'),
            'email' => 'admin@admin.com',
            'address' => 'admin home',
            'phone_number'=> '085123123',
            'gender' => 'male'
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'password' => bcrypt('user1234'),
            'email' => 'user@user.com',
            'address' => 'user home',
            'phone_number'=> '1231231',
            'gender' => 'male'
        ]);
    }
}
