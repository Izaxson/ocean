<?php
   
namespace App\Http\Controllers;
 
use Carbon\Carbon;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class GooglePieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allgender,
          gender from audits group by gender"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->gender."',   ".$list->allgender." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('pie',$arr);
          echo $chartData;
        
    }

    public function terms()
    {
 
         $result =   DB::select(DB::raw("select COUNT(*) as allterms,
          terms from audits group by terms"));  
          $chartData="";
          foreach($result as $list){
              $chartData.="['".$list->terms."',   ".$list->allterms." ],"; 
                          
          }                                 
          $arr['chartData']=rtrim($chartData,",");
          return view('terms',$arr);
          echo $chartData;
        
    }
 
}