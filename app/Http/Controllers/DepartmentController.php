<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function health()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','HEALTH')->get();
            return view('admin.health')->with('audit',$audit);
      
    }

    public function water()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','WATER ENVIRONMENT SANITATION')->get();
            return view('admin.water')->with('audit',$audit);
      
    }
}