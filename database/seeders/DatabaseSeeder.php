<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('post_customers')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
	            'phone' => rand(0,8),
                'address' => Str::random(10),
	        ]);
	}



      /*
        DB::table('post_customers')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => Str::random(10).'@gmail.com',

        ]); */
   }

}