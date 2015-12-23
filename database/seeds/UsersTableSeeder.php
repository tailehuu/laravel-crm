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
        DB::table('users')->insert([
            [
                'name' => 'Mansoor',
                'email' => 'mansoor@infonam.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Srinivas',
                'email' => 'srinivas@infonam.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Karthig',
                'email' => 'karthig@infonam.com',
                'password' => bcrypt('123456')
            ]
        ]);
    }
}
