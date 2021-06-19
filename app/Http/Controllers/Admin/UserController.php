<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('admin.users')->with('users', $users);
    }


    public function editroles($id)
    {
        $users= User::find($id);
        return view('admin.users-edit',compact('users'));

    }
    public function edit($id)
    {
             $user= User::findOrFail($id);
            return view('user-edit')->with('user',$user);

    }
}
