<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('terms')->insert([
            'name'=>'Permanent'
            ]);
    
            DB::table('terms')->insert([
            'name'=>'Contract'
            ]);

            DB::table('terms')->insert([
                'name'=>'Intern'
                ]);

            DB::table('terms')->insert([
                    'name'=>'Volunteer'
                    ]);   
            DB::table('terms')->insert([
                        'name'=>'Casual Worker'
                        ]);  
    }

}       
