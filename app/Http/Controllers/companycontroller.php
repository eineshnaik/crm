<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class companycontroller extends Controller
{
    //
    function createcompany()
    {
        return view('addcompanydetails');
    }

    function setcompany(Request $req)
    {
        $req->validate([
            'companyname'=>'required'
            ]); 
            $query = DB::table('companies')->insert([
                'name'=>$req->input('companyname'),
                'email'=>$req->input('email'),
                'website'=>$req->input('website')
                ]);
        
                if($query){
                    return back()->with('success','Data have been successful inserted');
                }
                else{
                    return back()->with('fail','Something went wrong');
                }
    }

    function getcompany()
    {
        $company = DB::select('select * from companies');
        return view('displaycompanydetails', ['company'=>$company]);
    }
    function upcompany($item)
    {
       

        $user = DB::select("select * from companies WHERE name= '$item'");

        
        
        
            return view('updatecompanydetails',['user'=>$user]);
    }
    function setupcompany(Request $req)
    {
        $cmpname=$req->input('companyname');
        $cmpemail=$req->input('email');
        $cmpwebsite=$req->input('website');
        $item= DB::update("update companies SET email='$cmpemail',website='$cmpwebsite' WHERE name='$cmpname'");
        if($item)
        {
             return back()->with('success','Data have been successful inserted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }

        
    }


    function deletecompany($item)
    {
        $del= DB::delete("delete from companies WHERE name= '$item'");
        
        if($del)
        {
             return back()->with('success','Data have been successful deleted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    }
}
