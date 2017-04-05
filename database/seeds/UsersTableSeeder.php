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
        DB::table('users') -> insert ([
        	[
        		"name" => "ivan",
        		"email" =>"ivan.primero@corett.gob.mx",
        		"password" => bcrypt('123456'),
        	],
        	[
        		"name" => "yonny",
        		"email" => "yonny.rendon@corett.gob.mx",
        		"password" => bcrypt('123456'),
        	],
        	[
        		"name" => "evelyn",
        		"email" => "evelyn.hernandez@corett.gob.mx",
        		"password" => bcrypt('123456'),
        	]

        ]);
    }
}
