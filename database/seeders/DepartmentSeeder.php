<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name'=>'HEALTH'
            ]);
    
            DB::table('departments')->insert([
            'name'=>'WATER ENVIRONMENT SANITATION'
            ]);

            DB::table('departments')->insert([
                'name'=>'ROADS PUBLIC WORKS'
                ]);

            DB::table('departments')->insert([
                    'name'=>'PUBLIC SERVICE ,COHESION INTEGRATION AND DEVOLVED UNIT'
                    ]);   
            DB::table('departments')->insert([
                        'name'=>'LAND HOUSING AND URBAN PLANNING'
                        ]);  
             DB::table('departments')->insert([
                            'name'=>'AGRICULTURE,LIVESTOCK AND FISHERIES'
                            ]);
                    
             DB::table('departments')->insert([
          'name'=>'EDUCATION ,CULTURE AND SPORTS'
                            ]);
                
             DB::table('departments')->insert([
                                'name'=>'FINANCE,ECONOMIC PLANNING & ICT'
                                ]);
             DB::table('departments')->insert([
                                    'name'=>'TRADE &INDUSTRILISATION'
                            ]);
              DB::table('departments')->insert([
                                        'name'=>'GENDER AND SOCIAL SERVICES'
                                        ]);  
             DB::table('departments')->insert([
                    'name'=>'OFFICE OF THE GOVERNOR'
                                            ]);  
             DB::table('departments')->insert([
                        'name'=>'MANDERA MUNICIPALITY'
                                     ]);  
             DB::table('departments')->insert([
                     'name'=>'ELWAK MUNICIPALITY'
                              ]); 
            DB::table('departments')->insert([
                    'name'=>'ELWASCO'
                              ]);  
            DB::table('departments')->insert([
                    'name'=>'MANDWASCO'
            ]);    
            DB::table('departments')->insert([
                'name'=>'PUBLIC SERVICE BOARD'
        ]);                                                                         
                                                                                                       
    


    
    }
}
