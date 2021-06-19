<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  

    public function run()
   {           
       DB::table('users')->insert([
        'role_id'=> 1,
        'name'=>'Admin Admin',
        'email'=>'admin@mcpsb.go.ke',
        'password'=>bcrypt('Password'),
        'role'=> 'Admin'

                
        ]);

        DB::table('users')->insert([
            'role_id'=> 2,
            'name'=>'Staff',
            'email'=>'staff@mcpsb.go.ke',
            'password'=>bcrypt('Password'),
            'role'=> 'Staff'
            
                    
            ]);
      
        
   }

}
