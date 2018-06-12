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

$locality = App\Locality::create([


            'locality' => 'London',
            'postal_code' => 'W1D 4HS'



    ]);



DB::table('locations')->insert([
            'id' => 10,
            'slug' => 'prince_edward_theatre',
            'designation' => 'Prince Edward Theatre',
            'address'=> 'Old Compton Street',
            'locality_id'=> $locality->id,
            'website'=>'',
            'phone'=> ''



    ]);

DB::table('shows')->insert([

            'id' => 1742,
            'slug' => 'Aladdin',
            'title' => 'Aladdin',
            'poster_url'=> 'https://media.londontheatredirect.com/Event/Aladdin/event-list-image_15943.jpg',
            'location_id'=>10,
            'price'=>95.0,



    ]);


//is just a test

DB::table('representations')->insert([

            'id' => 1,
            'show_id' => 1742,
            'location_id'=>10,
            'when'=> '2018-06-12 19:30:00' ,
    ]);





    }
}
