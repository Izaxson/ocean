<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
           
            $table->string('employee_name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('employee_personal_no')->nullable();
            $table->string('id_no')->unique();
            $table->string('disability');
            $table->string('nature_of_disability')->nullable();
            $table->string('first_designation')->nullable();
            $table->string('current_designation');
            $table->string('terms_of_service');
            $table->string('duty_station');
            $table->string('subcounty_duty_station');
            $table->date('date_of_first_appointment')->nullable();
            $table->date('date_of_current_appointment');
            $table->string('first_job_group')->nullable();
            $table->string('current_job_group');
            $table->string('department');
            $table->string('section');
            $table->string('home_county');
            $table->string('sub_county');
            $table->string('ethnicity');
            $table->string('clan')->nullable();
            $table->string('sub_clan')->nullable();
            $table->integer('mobile_number')->unique();
            $table->string('contact_address');
            $table->string('email_address')->unique();
            $table->string('academic_qualification');
            $table->string('area_of_specialization')->nullable();
            $table->string('professional_qualification')->nullable();
            $table->string('registration_no')->nullable();
            $table->longText('training_need');
            $table->string('study_leave');
            $table->longText('study_leave_details')->nullable();
            $table->string('placement');
            $table->longText('if_no_placement_reason')->nullable();
            $table->string('principle_of_governance');
            $table->string('code');
            $table->longText('comment')->nullable();
            $table->longText('remarks')->nullable();
            $table->string('approved_by')->nullable();
            $table->date('date_of_audit')->nullable();
            $table->string('captured_by')->nullable();
            $table->date('date_captured')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audits');
    }
}
