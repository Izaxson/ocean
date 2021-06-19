<?php

namespace App\Http\Controllers\Staff;

use Session;

use App\Models\Clan;
use App\Models\Audit;
use App\Models\Terms;
use App\Models\County;
use App\Models\Section;
use App\Models\JobGroup;
use App\Models\Sub_clan;
use App\Models\Ethnicity;
use App\Models\SubCounty;
use App\Models\Department;
use App\Models\HomeCounty;
use Illuminate\Http\Request;
use App\Models\Qualification;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\Admin\Ethnicity;

class AuditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   $data['terms'] =Terms::all();
        //   $subclan['sub_clans'] =Sub_clan::all();
        
            $terms = Terms::all();
            $clans = Clan::all();
            $subclan =Sub_clan::all();
            $department =Department::all();
            $jobgroup =JobGroup::all();
            $ethnicities =Ethnicity::all();
            $county =County::all();
            $section =Section::all();
            $education =Qualification::all();
            $subcounties =SubCounty::all();
            $subdutystation =SubCounty::join('counties','counties.id','=','sub_counties.county_id')->where('county_name','Mandera')->get();
            // $data = DB::table('ethnicities')->get();
            // $homecounty =HomeCounty::all();
           

    return view('staff.auditform', compact('terms','education','subclan' ,'subdutystation','department','jobgroup','ethnicities','clans','county','section','subcounties'));
    
        // return view('staff.auditform')->withName ([$data,$subclan}) ;  
    }
    public function GetSubCatAgainstMainCatEdit($id){
        echo json_encode(DB::table('clans')->where('ethnicity_id', $id)->get());

    }

    

    public function records()
    {           
            
             $audit = Audit::orderBy('created_at','ASC')->get();
            return view('staff.auditrecords')->with('audit',$audit);
      
    }


    public function ethnicity()
    {
        return view('reports.ethnicity');
    }

    public function disability()
    {
        return view('reports.disability');
    }

    public function age()
    {
        return view('reports.age');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'employee_name'=> 'required',
            'gender'=> 'required',
            'date_of_birth'=> 'required',
            'employee_personal_no'=> 'nullable',
            'id_no'=> 'required | unique:audits',
            'disability'=> 'required',
            'nature_of_disability'=> 'nullable',
            'first_designation'=> 'required',
            'current_designation'=> 'required',
            'terms_of_service'=> 'required',
            'duty_station'=> 'required',
            'subcounty_duty_station'=> 'required',
            'date_of_first_appointment'=> 'required',
            'date_of_current_appointment'=> 'required',
            'first_job_group'=> 'required',
            'current_job_group'=> 'required',
            'department'=> 'required',
            'section'=> 'required',
            'home_county'=> 'required',
            'sub_county'=> 'required',
            'ethnicity'=> 'required',
            'clan'=> 'nullable',
            'sub_clan'=> 'nullable',
            'mobile_number'=> 'required|unique:audits',
            'contact_address'=> 'nullable',
            'email_address'=> 'required|unique:audits',
            'academic_qualification'=> 'required:audits',
            'area_of_specialization'=> 'nullable',
            'professional_qualification'=> 'nullable',
            'registration_no'=> 'nullable',
            'training_need'=> 'required',
            'study_leave'=> 'required',
            'study_leave_details'=> 'nullable',
            'placement'=> 'required',
            'if_no_placement_reason'=> 'nullable',
            'principle_of_governance'=> 'required',
            'code'=> 'required',
            'comment'=> 'nullable',
            'remarks'=> 'nullable',
            'date_of_audit'=> 'required',
            'approved_by'=> 'required',
            'date_captured'=> 'required',
            'captured_by'=> 'required'
 

        ]);
        
       $audit= new Audit;
       $audit->employee_name =$request->employee_name;
       $audit->gender =$request->gender;
       $audit->date_of_birth =$request->date_of_birth;
       $audit->employee_personal_no =$request->employee_personal_no;
       $audit->id_no =$request->id_no;
       $audit->disability =$request->disability;
       $audit->nature_of_disability =$request->nature_of_disability;
       $audit->first_designation =$request->first_designation;
       $audit->current_designation =$request->current_designation;
       $audit->terms_of_service =$request->terms_of_service;
       $audit->duty_station =$request->duty_station;
       $audit->subcounty_duty_station =$request->subcounty_duty_station;
       $audit->date_of_first_appointment =$request->date_of_first_appointment;
       $audit->date_of_current_appointment =$request->date_of_current_appointment;
       $audit->first_job_group =$request->first_job_group;
       $audit->current_job_group =$request->current_job_group;
       $audit->department =$request->department;
       $audit->section =$request->section;
       $audit->home_county =$request->home_county;
       $audit->sub_county =$request->sub_county;
       $audit->ethnicity =$request->ethnicity;
       $audit->clan =$request->clan;
       $audit->sub_clan =$request->sub_clan;
       $audit->mobile_number =$request->mobile_number;
       $audit->contact_address =$request->contact_address;
       $audit->email_address =$request->email_address;
       $audit->academic_qualification =$request->academic_qualification;
       $audit->area_of_specialization =$request->area_of_specialization;
       $audit->professional_qualification =$request->professional_qualification;
       $audit->registration_no =$request->registration_no;
       $audit->training_need =$request->training_need;
       $audit->study_leave =$request->study_leave;
       $audit->study_leave_details =$request->study_leave_details;
       $audit->placement =$request->placement;
       $audit->if_no_placement_reason =$request->if_no_placement_reason;
       $audit->principle_of_governance =$request->principle_of_governance;
       $audit->code =$request->code;
       $audit->comment =$request->comment;
       $audit->remarks =$request->remarks;
       $audit->date_of_audit =$request->date_of_audit;
       $audit->approved_by =$request->approved_by;
       $audit->date_captured =$request->date_captured;
       $audit->captured_by =$request->captured_by;
       $audit->save();
      // return redirect('/staff.auditrecords')->with('status','Audit record added successfully');
      //
       //return redirect()->back()->with('status',"Audit record added successfully");
       session::flash('statuscode','success');
       return redirect()->route('staff.auditrecords')->with('status',"Audit record added successfully");
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        return view('staff.audit-edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function editform($id)
    {
        
        $audit= Audit::findOrFail($id);
        return view('staff.auditedit')->with('audit',$audit);
    }

    public function view($id)
    {
        
        $audit= Audit::findOrFail($id);
        return view('staff.auditview')->with('audit',$audit);
    }
     public function gender()
     {
        return view('reports.gender');
     }
     public function event()
     {
        return view('staff.event');
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'employee_name'=> 'required',
            'gender'=> 'required',
            'date_of_birth'=> 'required',
            'employee_personal_no'=> 'nullable',
            'id_no'=> 'required|unique:audits',
            'disability'=> 'required',
            'nature_of_disability'=> 'nullable',
            'first_designation'=> 'required',
            'current_designation'=> 'required',
            'terms_of_service'=> 'required',
            'duty_station'=> 'required',
            'subcounty_duty_station'=> 'required',
            'date_of_first_appointment'=> 'required',
            'date_of_current_appointment'=> 'required',
            'first_job_group'=> 'required',
            'current_job_group'=> 'required',
            'department'=> 'required',
            'section'=> 'required',
            'home_county'=> 'required',
            'sub_county'=> 'required',
            'ethnicity'=> 'required',
            'clan'=> 'nullable',
            'sub_clan'=> 'nullable',
            'mobile_number'=> 'required|unique:audits',
            'contact_address'=> 'nullable',
            'email_address'=> 'required|unique:audits',
            'academic_qualification'=> 'nullable',
            'area_of_specialization'=> 'nullable',
            'professional_qualification'=> 'nullable',
            'registration_no'=> 'nullable',
            'training_need'=> 'required',
            'study_leave'=> 'required',
            'study_leave_details'=> 'nullable',
            'placement'=> 'required',
            'if_no_placement_reason'=> 'nullable',
            'principle_of_governance'=> 'required',
            'code'=> 'required',
            'comment'=> 'nullable',
            'remarks'=> 'nullable',
            'date_of_audit'=> 'required',
            'approved_by'=> 'required',
            'date_captured'=> 'required',
            'captured_by'=> 'required'
 

        ]);
        
       $audit= Audit::findorFail($id);
       $audit->employee_name =$request->employee_name;
       $audit->gender =$request->gender;
       $audit->date_of_birth =$request->date_of_birth;
       $audit->employee_personal_no =$request->employee_personal_no;
       $audit->id_no =$request->id_no;
       $audit->disability =$request->disability;
       $audit->nature_of_disability =$request->nature_of_disability;
       $audit->first_designation =$request->first_designation;
       $audit->current_designation =$request->current_designation;
       $audit->terms_of_service =$request->terms_of_service;
       $audit->duty_station =$request->duty_station;
       $audit->subcounty_duty_station =$request->subcounty_duty_station;
       $audit->date_of_first_appointment =$request->date_of_first_appointment;
       $audit->date_of_current_appointment =$request->date_of_current_appointment;
       $audit->first_job_group =$request->first_job_group;
       $audit->current_job_group =$request->current_job_group;
       $audit->department =$request->department;
       $audit->section =$request->section;
       $audit->home_county =$request->home_county;
       $audit->sub_county =$request->sub_county;
       $audit->ethnicity =$request->ethnicity;
       $audit->clan =$request->clan;
       $audit->sub_clan =$request->sub_clan;
       $audit->mobile_number =$request->mobile_number;
       $audit->contact_address =$request->contact_address;
       $audit->email_address =$request->email_address;
       $audit->academic_qualification =$request->academic_qualification;
       $audit->area_of_specialization =$request->area_of_specialization;
       $audit->professional_qualification =$request->professional_qualification;
       $audit->registration_no =$request->registration_no;
       $audit->training_need =$request->training_need;
       $audit->study_leave =$request->study_leave;
       $audit->study_leave_details =$request->study_leave_details;
       $audit->placement =$request->placement;
       $audit->if_no_placement_reason =$request->if_no_placement_reason;
       $audit->principle_of_governance =$request->principle_of_governance;
       $audit->code =$request->code;
       $audit->comment =$request->comment;
       $audit->remarks =$request->remarks;
       $audit->date_of_audit =$request->date_of_audit;
       $audit->approved_by =$request->approved_by;
       $audit->date_captured =$request->date_captured;
       $audit->captured_by =$request->captured_by;
       $audit->update();
      // return redirect('/staff.auditrecords')->with('status','Audit record added successfully');
      //
       //return redirect()->back()->with('status',"Audit record added successfully");
       return redirect()->route('staff.auditrecords')->with('status',"Audit record updated successfully");
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
