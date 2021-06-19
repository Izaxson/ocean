<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clans')->insert([
                                 
             'name'=>'GARRE',
             'ethnicity_id'=>'1',
          
            ]);

            DB::table('clans')->insert([
          
                'name'=>'MURULLE',
                'ethnicity_id'=>'1',
           
                ]);

                DB::table('clans')->insert([
           
                    'name'=>'DEGODIA',
                    'ethnicity_id'=>'1',
                   
                   
                  
                    ]);

                    DB::table('clans')->insert([
           
                        'name'=>'CORNER TRIBE',
                        'ethnicity_id'=>'1',
                       
                       
                      
                        ]);

                        DB::table('clans')->insert([
           
                            'name'=>'MAREHAN',
                            'ethnicity_id'=>'1',
                           
                           
                          
                            ]);

                            DB::table('clans')->insert([
           
                                'name'=>'AJURAN ',
                                'ethnicity_id'=>'1',
                               
                               
                              
                                ]);

                                DB::table('clans')->insert([
           
                                    'name'=>'OGADEN',
                                    'ethnicity_id'=>'1',
                                   
                                   
                                  
                                    ]);

    }
}
