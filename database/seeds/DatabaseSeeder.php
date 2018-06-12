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

DB::table('localities')->insert(
    [


            'locality' => 'London',
            'postal_code' => 'W1D 4HS'
 ]);

  DB::table('localities')->insert( [


            'locality' => 'Manchester',
            'postal_code' => 'MAN 4HS'
 ]);
   
   DB::table('localities')->insert([


            'locality' => 'Bermengham',
            'postal_code' => 'BER 4HS'
 ]);





DB::table('locations')->insert([
            'id' => 10,
            'slug' => 'prince_edward_theatre',
            'designation' => 'Prince Edward Theatre',
            'address'=> 'Old Compton Street',
            'locality_id'=> 3,
            'website'=>'',
            'phone'=> '']);

DB::table('locations')->insert([
            'id' => 9,
            'slug' => 'patrick vierra',
            'designation' => 'theatre des anges',
            'address'=> 'wall Street',
            'locality_id'=> 2,
            'website'=>'',
            'phone'=> '']);
        
        DB::table('locations')->insert([
            'id' => 13,
            'slug' => 'theatre royal',
            'designation' => 'theatre de bozar',
            'address'=> 'avenue de la liberté',
            'locality_id'=> 1,
            'website'=>'',
            'phone'=> '']


            );

DB::table('shows')->insert(
          [
            'id' => 1742,
            'slug' => 'Aladdin',
            'title' => 'Aladdin',
            'poster_url'=> 'https://media.londontheatredirect.com/Event/Aladdin/event-list-image_15943.jpg',
            'location_id'=>10,
            'price'=>95.0 ]);
             DB::table('shows')->insert( [
            'id' => 384,
            'slug' => 'The Lion King',
            'title' => 'The Lion King',
            'poster_url'=> 'https://media.londontheatredirect.com/Event/TheLionKing/event-list-image_15037.jpg',
            'location_id'=>9,
            'price'=>0 ]);
             DB::table('shows')->insert( [
            'id' => 13,
            'slug' => 'Phantom of the Opera',
            'title' => 'Phantom of the Opera',
            'poster_url'=> 'https://www.londontheatredirect.com/images/Event/PhantomofTheOpera/Phantom-of-The-Opera-10572.jpg',
            'location_id'=>13,
            'price'=>0 ]

           );


//is just a test

DB::table('representations')->insert([

            'id' => 1,
            'show_id' => 1742,
            'location_id'=>10,
            'when'=> '2018-06-12 19:30:00' ,
    ]);

DB::table('representations')->insert([

            'id' => 2,
            'show_id' => 384,
            'location_id'=>9,
            'when'=> '2018-06-11 12:30:00' ,
    ]);

DB::table('representations')->insert([

            'id' => 3,
            'show_id' => 13,
            'location_id'=>13,
            'when'=> '2018-06-11 12:30:00' ,
    ]


    );





    }
}
