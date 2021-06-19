<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }


    public function index(){

    	return view('auth.passwordschange');
   }


    public function changepassword(Request $request){
    	$this->validate($request,[

    		'oldpassword'=> 'required',
    		'password'=> 'required|confirmed'
    		
	 	]);

    	$hashedPassword = Auth::user()->password;
    	if (Hash::check($request->oldpassword,$hashedPassword)){
    		$user = User::find(Auth::id());
    		$user->password = Hash::make($request->password);
    		$user->save();
    		Auth::logout();
    		return redirect()->route('login')->with('successMsg',"password changed successfully.You can Login in");
    	}

    	else{
			return redirect()->back()->with('errorMsg',"current password is in invalid");
			

   	}

   }


}