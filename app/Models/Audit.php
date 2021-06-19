<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audit extends Model
{  protected $fillable = [
    'employee_name',
    'gender',
    'date_of_birth',
    'employee_personal_no',
    'id_no',
    'disability',
    'first_designation',
    'current_designation',
    'terms_of_service',
    'duty_station',
    'subcounty_duty_station',
    'date_of_first_appointment',
    'date_of_current_appointment',
    'first_job_group',
    'current_job_group',
    'section',
    'home_county',
    'sub_county',
    'ethnicity',
    'clan',
    'sub_clan',
    'mobile_number',
    'contact_address',
    'email_address',
    'academic_qualification',
    'area_of_specialization',
    'professional_qualification',
    'registration_no',
    'training_need',
    'study_leave',
    'placement',
    'principle_of_governance',
    'code',
    'comment',
    'remarks',
    'date_of_audit',
    'approved_by',
    'date_captured',

    
    
]; 

protected $table = "audits";
    public function user()
    {
        return $this->belongsTo('App/User','audit_id');
    }

    public function jobgroup()
    {
        return $this->hasMany('App/JobGroup','id');
    }

    public function departments()
    {
        return $this->hasMany('App/Department','id');
    }
    public function clans()
    {
        return $this->hasMany('App/Clan','id');
    }
   

  
}
