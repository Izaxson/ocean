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
        'name'=>'ISAAC ABDOW',
        'email'=>'isaacabdow@mcpsb.go.ke',
        'password'=>bcrypt('Ilhaney@2021!'),
        'role'=> 'Admin'

                
        ]);

        DB::table('users')->insert([
            'role_id'=> 1,
            'name'=>'ETHILLAH MOHAMUD',
            'email'=>'chaireson@mcpsb.go.ke',
            'password'=>bcrypt('0722931515'),
            'role'=> 'Staff'
            
                    
            ]);
        DB::table('users')->insert([
                'role_id'=> 1,
                'name'=>'MOHAMMED ABDOW',
                'email'=>'ceo@mcpsb.go.ke',
                'password'=>bcrypt('0722327191'),
                'role'=> 'Staff'
                
                        
                ]);
         DB::table('users')->insert([
                    'role_id'=> 1,
                    'name'=>'Hassan Fillow',
                    'email'=>'director@mcpsb.go.ke',
                    'password'=>bcrypt('0721734567'),
                    'role'=> 'Staff'
                    
                            
                    ]);   
                    
        DB::table('users')->insert([
                        'role_id'=> 1,
                        'name'=>'Adankher Ahmed',
                        'email'=>'adankher@mcpsb.go.ke',
                        'password'=>bcrypt('0722943891'),
                        'role'=> 'Staff'
                        
                                
                        ]);  
        DB::table('users')->insert([
                            'role_id'=> 1,
                            'name'=>'Joseph Nyange',
                            'email'=>'josephnyange@mcpsb.go.ke',
                            'password'=>bcrypt('0721751180'),
                            'role'=> 'Staff'
                            
                                    
                            ]);      
         DB::table('users')->insert([
                                'role_id'=> 1,
                                'name'=>'Abdikher Rahoy',
                                'email'=>'abdikherrahoy@mcpsb.go.ke',
                                'password'=>bcrypt('0722440145'),
                                'role'=> 'Staff'
                                
                                        
                                ]);   
        DB::table('users')->insert([
                                    'role_id'=> 1,
                                    'name'=>'Abdullahi Ibrahim',
                                    'email'=>'abdullahibrahim@mcpsb.go.ke',
                                    'password'=>bcrypt('0722778668'),
                                    'role'=> 'Staff'
                                    
                                            
                                    ]);
         DB::table('users')->insert([
                                        'role_id'=> 1,
                                        'name'=>'Abdi Issack',
                                        'email'=>'abdiissackge@mcpsb.go.ke',
                                        'password'=>bcrypt('0725684885'),
                                        'role'=> 'Staff'
                                        
                                                
                                        ]);     
                                        
                     DB::table('users')->insert([
                                            'role_id'=> 1,
                                            'name'=>'Alinoor Mohammed',
                                            'email'=>'accounts@mcpsb.go.ke',
                                            'password'=>bcrypt('0700001001'),
                                            'role'=> 'Staff'
                                            
                                                    
                                            ]); 
                                            DB::table('users')->insert([
                                                'role_id'=> 1,
                                                'name'=>'Khadija Dayow',
                                                'email'=>'kdayow@mcpsb.go.ke',
                                                'password'=>bcrypt('0726869307'),
                                                'role'=> 'Staff'
                                                
                                                        
                                                ]); 
                                                DB::table('users')->insert([
                                                    'role_id'=> 1,
                                                    'name'=>'Samuel Wasike',
                                                    'email'=>'swasike@mcpsb.go.ke',
                                                    'password'=>bcrypt('0712639315'),
                                                    'role'=> 'Staff'
                                                    
                                                            
                                                    ]); 
                                                    DB::table('users')->insert([
                                                        'role_id'=> 1,
                                                        'name'=>'Abdinassir Abdi',
                                                        'email'=>'abdinassirabdi@mcpsb.go.ke',
                                                        'password'=>bcrypt('0729224181'),
                                                        'role'=> 'Staff'
                                                        
                                                                
                                                        ]); 
                                                        DB::table('users')->insert([
                                                            'role_id'=> 1,
                                                            'name'=>'Issa Abdi',
                                                            'email'=>'issaabdi@mcpsb.go.ke',
                                                            'password'=>bcrypt('0726287421'),
                                                            'role'=> 'Staff'
                                                            
                                                                    
                                                            ]); 
                                                            DB::table('users')->insert([
                                                                'role_id'=> 1,
                                                                'name'=>'Sylvia',
                                                                'email'=>'sylvia@mcpsb.go.ke',
                                                                'password'=>bcrypt('0721298252'),
                                                                'role'=> 'Staff'
                                                                
                                                                        
                                                                ]); 
                                                                DB::table('users')->insert([
                                                                    'role_id'=> 1,
                                                                    'name'=>'Mohammed Ibrahim',
                                                                    'email'=>'mibrahim@mcpsb.go.ke',
                                                                    'password'=>bcrypt('0722893270'),
                                                                    'role'=> 'Staff'
                                                                    
                                                                            
                                                                    ]); 
                                                                    DB::table('users')->insert([
                                                                        'role_id'=> 1,
                                                                        'name'=>'CPSB COMM',
                                                                        'email'=>'commisioners@mcpsb.go.ke',
                                                                        'password'=>bcrypt('Cpsb@2030'),
                                                                        'role'=> 'Staff'
                                                                        
                                                                                
                                                                        ]); 
            
        
   }

}
