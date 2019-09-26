<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'phone' => '1234567890',
            'password' => bcrypt('password'),
        ]);
    }
}
