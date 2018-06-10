<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('roles')->insert([
            'id' => 1,
            'role' => 'admin'

        ]);

		DB::table('roles')->insert([
            'id' => 2,
            'role' => 'user'

        ]);



        
        DB::table('users')->insert([
            'id' => 1,
            'firstname' => 'admin',
            'lastname' => 'admin',
            'login' => 'admin',
            'password' => bcrypt('123456'),
            'email' => 'admin@gmail.com',
            'langue' => 'english',
            'role_id' => 1

        ]);

        DB::table('users')->insert([
            'id' => 2,
            'firstname' => 'user',
            'lastname' => 'user',
            'login' => 'user',
            'password' => bcrypt('123456'),
            'email' => 'user@gmail.com',
            'langue' => 'english',
            'role_id' => 2

        ]);











    }
}
