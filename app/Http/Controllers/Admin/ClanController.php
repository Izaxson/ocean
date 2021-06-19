<?php

namespace App\Http\Controllers\Admin;

use App\Models\Clan;
use App\Models\Sub_clan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClanController extends Controller
{


    public function index()
    {   
        $clan = Clan::all();
        return view('admin.auditform',compact('clan'));
    }

    public function getSubClan($id)
    {
        $subclan= Sub_clan::where('clan_id',$id)->pluck("name","id");
        return json_encode($sub_clan);
    }
}
   