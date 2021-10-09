<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    function login()
    {
        return view('login');
    }

    function add2(Request $req)
    {
        $req->validate([
            'id'=>'required',
            'password'=>'required'
            ]);
        $id=$req->input('id');
        $pass=$req->input('password');

        $user = DB::select("select * from details WHERE id= '$id'");

        foreach($user as $value)
        {

        
        if(($value->id == $id) && ($value->password == $pass))
        {
            return view('select');
        }
        else
        {
            return back()->with('fail','Incorrect Login details');
        }
        
        }
    }
}
