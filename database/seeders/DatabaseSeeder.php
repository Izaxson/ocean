<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\TermsSeeder;
use Database\Seeders\Audit2Seeder;
//use Database\Seeders\CountySeeder;
use Database\Seeders\SectionSeeder;
use Database\Seeders\subClanSeeder;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\JobGroupSeeder;
use Database\Seeders\EthnicitySeeder;

//use Database\Seeders\SubCountySeeder;
use Database\Seeders\DepartmentSeeder;
// use Database\Seeders\MdrSubCountySeeder;
use Database\Seeders\QualificationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(CountySeeder::class);
        $this->call(ClanSeeder::class);
        $this->call(SubClanSeeder::class);
        //$this->call(User2Seeder::class);
        //$this->call(Audit2Seeder::class);
        $this->call(TermsSeeder::class);
        $this->call(JobGroupSeeder::class);
        $this->call(subClanSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(EthnicitySeeder::class);
        $this->call(SectionSeeder::class);
        // $this->call(SubCountySeeder::class);
        // $this->call(MdrSubCountySeeder::class);
        // $this->call(QualificationSeeder::class);
        
      

    }
    
    

}
