<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             DB::table('qualifications')->insert([
            'name'=>'MASTERS'
            ]);
             DB::table('qualifications')->insert([
                'name'=>'BACHELORS'
                ]);    

             DB::table('qualifications')->insert([
                    'name'=>'DIPLOMA'
                    ]);     
             DB::table('qualifications')->insert([
                        'name'=>'CERTIFICATE'
                        ]);                             
    }
}
