<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }
    public function myform()
    {
        $states = DB::table("demo_state")->lists("name","id");
        return view('myform',compact('states'));
    }

    public function GetSubcounties(Request $request)
    {
         $data=$request->all();
           echo '<option>Isanya On Point</option>';


    }


    public function myformAjax($id)
    {
        $cities = DB::table("demo_cities")
                    ->where("state_id",$id)
                    ->lists("name","id");
        return json_encode($cities);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function GetMyGenderStatistics()
    {
       $data=array();
    }
   
}
