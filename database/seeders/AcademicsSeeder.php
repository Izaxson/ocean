<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcademicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('academics')->insert([
        'name'=>'PHD'
        ]);

 DB::table('academics')->insert([
            'name'=>'MASTERS'
            ]);
DB::table('academics')->insert([
                'name'=>'BACHELORS'
                ]);  
DB::table('academics')->insert([
                    'name'=>'DIPLOMA'
                    ]);
DB::table('academics')->insert([
                        'name'=>'CERTIFICATE'
                        ]);
 DB::table('academics')->insert([
                'name'=>'KCSE'
                ]);
 DB::table('academics')->insert([
                    'name'=>'KCPE'
                    ]);           
DB::table('academics')->insert([
                        'name'=>'MADRASSA'
                        ]);
 DB::table('academics')->insert([
                            'name'=>'NOT SCHOOLED'
                            ]);
      

    }
}
