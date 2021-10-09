<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    //
    function sel()
    {
        return view('select');
    }


   
    function index(){
        return view('welcome');
    }
    function add(Request $req)
    {
       
        $req->validate([
        'id'=>'required',
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
        ]);
        $query = DB::table('details')->insert([
        'id'=>$req->input('id'),
        'name'=>$req->input('name'),
        'email'=>$req->input('email'),
        'password'=>$req->input('password')
        ]);

        if($query){
            return back()->with('success','Data have been successful inserted');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
        
    }



    
    
}
