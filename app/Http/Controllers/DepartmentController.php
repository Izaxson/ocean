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

    public function roads()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','ROADS PUBLIC WORKS')->get();
            return view('admin.roads')->with('audit',$audit);
      
    }

    public function psm()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','PUBLIC SERVICE ,COHESION INTEGRATION AND DEVOLVED UNIT')->get();
            return view('admin.psm')->with('audit',$audit);
      
    }
    public function lands()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','LAND HOUSING AND URBAN PLANNING')->get();
            return view('admin.lands')->with('audit',$audit);
      
    }
    public function agriculture()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','AGRICULTURE,LIVESTOCK AND FISHERIES')->get();
            return view('admin.agriculture')->with('audit',$audit);
      
    }
    public function education()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','EDUCATION ,CULTURE AND SPORTS')->get();
            return view('admin.education')->with('audit',$audit);
      
    }
    public function finance()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','FINANCE,ECONOMIC PLANNING & ICT')->get();
            return view('admin.finance')->with('audit',$audit);
      
    }
   
    public function trade()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','TRADE &INDUSTRILISATION')->get();
            return view('admin.trade')->with('audit',$audit);
      
    }
    public function gender()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','GENDER AND SOCIAL SERVICES')->get();
            return view('admin.gender')->with('audit',$audit);
      
    }
    public function oog()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','OFFICE OF THE GOVERNOR')->get();
            return view('admin.oog')->with('audit',$audit);
      
    }
    public function mdrmunicipal()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','MANDERA MUNICIPALITY')->get();
            return view('admin.mdrmunicipal')->with('audit',$audit);
      
    }
    public function elwakmunicipal()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','ELWAK MUNICIPALITY')->get();
            return view('admin.elwakmunicipal')->with('audit',$audit);
      
    }
    public function elwasco()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','ELWASCO')->get();
            return view('admin.elwasco')->with('audit',$audit);
      
    }
    public function mandwasco()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','MANDWASCO')->get();
            return view('admin.mandwasco')->with('audit',$audit);
      
    }
    public function psb()
    {           
            
             $audit = Audit::orderBy('id','ASC')->where('department','PUBLIC SERVICE BOARD')->get();
            return view('admin.psb')->with('audit',$audit);
      
    }
}