<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CountySeeder;
use Database\Seeders\DatabaseSeeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class User2Seeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
        $faker = Faker::create()   ;
        foreach(range(1,10000) as $index)
        {
            DB::table('users')->insert([
                'name' =>  $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password'=> encrypt('password'),
                'created_at'=> $faker->dateTimeBetween('-6 month','+1 month')
            ]);
        }

    }
      
    
    

}
