<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\Clan;
use App\Models\Audit;
use App\Models\Sub_clan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    
    public function gender()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allgender,
          gender from audits group by gender"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->gender."',   ".$list->allgender." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/gender', $arr);
          
        
    }
    public function disability()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as alldisability,
          disability from audits group by disability"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->disability."',   ".$list->alldisability." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/disability', $arr);
          
        
    }

    public function placement()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allplacement,
         placement from audits group by placement"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->placement."',   ".$list->allplacement." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/placement', $arr);
          
        
    }

    public function terms()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allterms,
         terms_of_service from audits group by terms_of_service"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->terms_of_service."',   ".$list->allterms." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/terms', $arr); 
          
        
    }

    public function study()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allstudy,
         study_leave from audits group by study_leave"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->study_leave."',   ".$list->allstudy." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/study', $arr); 
          
        
    }
    public function governance()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allgovernance,
         principle_of_governance from audits group by principle_of_governance"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->principle_of_governance."',   ".$list->allgovernance." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/governance', $arr); 
          
        
    }


    public function code()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allcode,
         code from audits group by code"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->code."',   ".$list->allcode." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/code', $arr); 
          
        
    }

    public function qualification()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allqualification,
         academic_qualification from audits group by academic_qualification"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->academic_qualification."',   ".$list->allqualification." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/qualification', $arr); 
          
        
    }

    public function subcnty()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allsubcnty,
         subcounty_duty_station from audits group by subcounty_duty_station"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->subcounty_duty_station."',   ".$list->allsubcnty." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/subcnty', $arr); 
          
        
    }

    public function department()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as alldepartment,
         department from audits group by department"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->department."',   ".$list->alldepartment." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/department', $arr); 
          
        
    }

    public function jobgroup()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as alljobgroups,
         current_job_group from audits group by current_job_group"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->current_job_group."',   ".$list->alljobgroups." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/jobgroup', $arr); 
          
        
    }
    public function notmandera()
    {
    	$nonlocal = Audit::where('home_county','!=Mandera')->get();
    	;
    	$nonlocal_count = count($nonlocal);    	
    	
    	
    	return view('admin.dashboard',compact('nonlocal_count'));
    }

    public function graphs()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allclans,
         clan from audits group by clan"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->clan."',   ".$list->allclans." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/dashboard', $arr); 
          
        
    }

    
  
    public function garre()
    {
 
         $result = DB::select(DB::raw("SELECT COUNT(*) AS subclans,
         sub_clan FROM audits
         WHERE clan='GARRE'
         group by sub_clan"));  
         
          $chartData="";
          
          foreach($result as $list){
              $chartData.="['".$list->sub_clan."',   ".$list-> subclans." ],"; 
                          
          }  
                                         
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/garre', $arr); 
          
        
    }
    public function degodia()
    {
 
         $result = DB::select(DB::raw("SELECT COUNT(*) AS subclans,
         sub_clan FROM audits
         WHERE clan='DEGODIA'
         group by sub_clan"));  
         
          $chartData="";
          
          foreach($result as $list){
              $chartData.="['".$list->sub_clan."',   ".$list-> subclans." ],"; 
                          
          }  
                                         
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/degodia', $arr); 
          
        
    }

    public function murulle()
    {
 
         $result = DB::select(DB::raw("SELECT COUNT(*) AS subclans,
         sub_clan FROM audits
         WHERE clan='MURULLE'
         group by sub_clan"));  
         
          $chartData="";
          
          foreach($result as $list){
              $chartData.="['".$list->sub_clan."',   ".$list-> subclans." ],"; 
                          
          }  
                                         
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/murulle', $arr); 
          
        
    }

    public function cornertribe()
    {
 
         $result = DB::select(DB::raw("SELECT COUNT(*) AS subclans,
         sub_clan FROM audits
         WHERE clan='CORNER TRIBE'
         group by sub_clan"));  
         
          $chartData="";
          
          foreach($result as $list){
              $chartData.="['".$list->sub_clan."',   ".$list-> subclans." ],"; 
                          
          }  
                                         
          $arr['chartData']=rtrim($chartData,",");
          return view('admin/cornertribe', $arr); 
          
        
    }


    

    
    
}
