<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use Illuminate\Http\Request;
use App\Models\SubCounty;
use App\Models\Sub_clan as SubClan;
class UserChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function GetSubcounties(Request $request)
    { $data=$request->all();
        $name=$data['County'];
        $models=SubCounty::join('counties','counties.id','=','sub_counties.county_id')
        ->select('sub_county_name')
        ->where(['county_name'=>$name])->get();
        echo '<option>---select sub county</option>';
          foreach($models as $model)
          {
            echo '<option>'.$model->sub_county_name.'</option>';
          }

    }

    public function GetSubClan(Request $request)
    {
        $data=$request->all();
        $name=$data['Clan'];
        $models=SubClan::join('clans','clans.id','=','subclans.clan_id')
        ->select('subclans.name')
        ->where(['clans.name'=>$name])->get();
        echo '<option>---select sub Clan</option>';
          foreach($models as $model)
          {
            echo '<option>'.$model->name.'</option>';
          }

    }
    
   /* public function gender(Request $request)
    {
    	$male = Audit::where('gender','male')->get();
        $female = Audit::where('gender','female')->get();
    	
    	$male_count = count($male);    	
    	$female_count = count($female);
    	
    	return view('admin.echart',compact('male_count','female_count'));
    }*/
     public function gender(Request $request)
    {
        $male = Audit::where('gender','male')->get();
        $female = Audit::where('gender','female')->get();
        
        $male_count = count($male);     
        $female_count = count($female);
        
        return view('admin.dashboard',compact('male_count','female_count'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
