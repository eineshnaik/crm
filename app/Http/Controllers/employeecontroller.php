<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeecontroller extends Controller
{
    //
    function createemployee()
    {
        return view('addemployeedetails');
    }

    function setemployee(Request $req)
    {
       
        $req->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        ]);
        $query = DB::table('employees')->insert([
        'firstname'=>$req->input('firstname'),
        'lastname'=>$req->input('lastname'),
        'name'=>$req->input('company'),
        'email'=>$req->input('email'),
        'phone'=>$req->input('phone')
        ]);

        if($query){
            return back()->with('success','Data have been successful inserted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
        
    }

    function getemployee()
    {
        $employee = DB::select('select * from employees');
        return view('displayemployeedetails', ['employee'=>$employee]);
    }


    function upemployee(Request $req)
    {
       
        $req->validate([
        'firstname'=>'required',
        'lastname'=>'required',
        ]);
        $query = DB::select('select * from employees WHERE firstname="$val"');

        if($query){
            return back()->with('success','Data have been successful inserted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
        
    }


    function deleteemployee($item)
    {
        $del= DB::delete("delete from employees WHERE firstname= '$item'");
        
        if($del)
        {
             return back()->with('success','Data have been successful deleted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    }

}
