<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::Create([
            'name' => 'Hugo Reinhard Nukuboy',
            'username' => 'hugo',
            'password' => bcrypt('12345qwerty'),
            'email' => 'hugo@gmail.com',
        ]);
    }
}
