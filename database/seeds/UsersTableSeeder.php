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
            'name' => 'Arlen',
            'email' => 'arlen@site.com',
            'password' => bcrypt('123456')
        ]);
    }
}
