<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class Audit2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create()   ;
        foreach(range(1,4000) as $index)
        {
            DB::table('audits')->insert([
                'name' =>  $faker->name,
                'gender' =>  $faker->gender,
                'date' => $faker->dateTime('-56 Years','+1 Year'),
                'employee_personal_no' =>  $faker->employee_personal_no,
                'id_no ' =>  $faker->id_no ,
                'disability	' =>  $faker->disability	,
                'nature_of_disability' =>  $faker->nature_of_disability,
                'first_designation	' =>  $faker->first_designation	,
                'terms_of_service' =>  $faker->terms_of_service,
                'duty_station' =>  $faker->duty_station,
                'date_of_first_appointment' =>  $faker->dateTime('-16 Years','+1 Year'),
                'date_of_current_appointment' => $faker->dateTime('-6 Years','+1 Year'),
                'first_job_group'=> $faker->first_job_group,
                'ethnicity' =>  $faker->ethnicity,
                'clan' =>  $faker->clan,
                'home_county' =>  $faker->home_county,
                'sub_county' =>  $faker->sub_county,
                'sub_clan' =>  $faker->sub_clan,
                'mobile_number ' =>  $faker->mobile_number ,
                'contact_address' =>  $faker->contact_address,
                'academic_qualification' =>  $faker->academic_qualification,
                'area_of_specialization' =>  $faker->area_of_specialization,
                'professional_qualification' =>  $faker->professional_qualification,
                'registration_no' =>  $faker->registration_no,
                'email_address ' => $faker->unique()->safeEmail,
                'training_need' =>  $faker->training_need,
                'study_leave' =>  $faker->study_leave,
                'study_leave_details' =>  $faker->study_leave_details,
                'placement' =>  $faker->placement,
                'if_no_placement_reason' =>  $faker->if_no_placement_reason,
                'principle_of_governance' =>  $faker->principle_of_governance,
                'code' =>  $faker->code,
                'comment' =>  $faker->comment,
                'remarks' =>  $faker->remarks,
                'approved_by' =>  $faker->approved_by,
                'date_of_audit' =>  $faker->dateTime('-6 days','+1 day'),
                'captured_by' =>  $faker->captured_by,
                'date_captured' =>  $faker->dateTime('-6 days','+1 day'),
                'updated_at' =>  $faker->dateTime('-6 month','+1 month'),
                'created_at'=> $faker->dateTimeBetween('-6 month','+1 month')
            ]);
        }

    }
}
