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
                'name' => 'Karthig',
                'email' => 'karthig@terralogic.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Matt',
                'email' => 'mart@terralogic.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mansoor',
                'email' => 'mansoor@terralogic.com',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Srinivas',
                'email' => 'srinivas@terralogic.com',
                'password' => bcrypt('123456')
            ],
        ]);
    }
}
