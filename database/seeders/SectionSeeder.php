<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name'=>'AGRICULTURE'
            ]);
    
            DB::table('sections')->insert([
            'name'=>'IRRIGATION'
            ]);

            DB::table('sections')->insert([
                'name'=>'LIVESTOCK & FISHERIES'
                ]);

            DB::table('sections')->insert([
                    'name'=>'CULTURE,TOURISM & SPORTS'
                    ]);   
            DB::table('sections')->insert([
                        'name'=>'EDUCATION & VOCATIONAL TRAINING '
                        ]); 
            DB::table('sections')->insert([
                            'name'=>'SPECIAL PROGRAMS, DISASTER PREPAREDNESS & MANAGEMENT '
                            ]); 
            DB::table('sections')->insert([
                                    'name'=>'ACCOUNTING & FINANCIAL SERVICES '
                                    ]); 
            DB::table('sections')->insert([
                            'name'=>'REVENUE SERVICES'
                                    ]);                 
            
            DB::table('sections')->insert([
                          'name'=>'ECONOMIC PLANNING & STATISTICS'
                                    ]); 
            DB::table('sections')->insert([
                          'name'=>'GENDER &SOCIAL SERVICES'
                                        ]); 
            DB::table('sections')->insert([
                        'name'=>'PUBLIC HEALTH SERVICES '
                                 ]); 
             DB::table('sections')->insert([
                             'name'=>'MEDICAL SERVICES' ]); 
           DB::table('sections')->insert([
                            'name'=>'LANDS SURVEY &B PHYSICAL PLANNING'
                                 ]);                                     
            DB::table('sections')->insert([
                            'name'=>'HOUSING AND URBAN DEVELOPMENT'
                                    ]); 
            DB::table('sections')->insert([
                                        'name'=>'PUBLIC SERVICE MANAGEMENT'
                                            ]); 

            DB::table('sections')->insert([
                                'name'=>'DEVOLVED UNITS'
                                 ]); 
       DB::table('sections')->insert([
                            'name'=>'GOVERNANCE,CIVIC EDUCATION & PUBLIC PARTICIPATION'
                               ]); 
     DB::table('sections')->insert([
       'name'=>'DE-RADICALIZATION & COUNTER VIOLENCE EXTREMISM'
         ]); 

         DB::table('sections')->insert([
            'name'=>'CONFLICT MANAGEMENT COHESION & INTEGRATION'
            ]);
    
            DB::table('sections')->insert([
            'name'=>'PUBLIC WORKS'
            ]);

            DB::table('sections')->insert([
                'name'=>'ROADS & TRANSPORT'
                ]);

            DB::table('sections')->insert([
                    'name'=>'TRADE,INVESTMENT & INDUSTRIALIZATION'
                    ]);   
            DB::table('sections')->insert([
                        'name'=>'WATER SERVICES'
                        ]);  
             DB::table('sections')->insert([
                            'name'=>'ENVIRONMENT ,ENERGY AND NATURAL RESOURCES'
                            ]);
                    
             DB::table('sections')->insert([
          'name'=>'OFFICE OF THE GOVERNOR'
                            ]);
                
             DB::table('sections')->insert([
                                'name'=>'YOUTH AFFAIRS'
                                ]);
             DB::table('sections')->insert([
                                    'name'=>'COPERATIVE DEVELOPMENT'
                            ]);
              DB::table('sections')->insert([
                                        'name'=>'ICT & E-GOVERNMENT'
                                        ]);  
            
    }
}
