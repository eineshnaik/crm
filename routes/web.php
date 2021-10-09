<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\companycontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[SignupController::class,'index']);//it calls view welcome through Controller
Route::POST('add',[SignupController::class,'add']);//to save signup details

Route::get('login',[LoginController::class,'login']);//it calls view login through Controller
Route::POST('add2',[LoginController::class,'add2']);//it auth login info

Route::get('employee',[employeecontroller::class,'createemployee']);//it calls view addemployeedetails through Controller
Route::POST('emp',[employeecontroller::class,'setemployee']);//it saves employee details

Route::get('company',[companycontroller::class,'createcompany']);//it calls view addcompany details through controller
Route::POST('cmp',[companycontroller::class,'setcompany']);

Route::get('select',[SignupController::class,'sel']);

Route::get('getemp',[employeecontroller::class,'getemployee']);
Route::get('getcmp',[companycontroller::class,'getcompany']);

Route::get('updatecmp/{item}',[companycontroller::class,'upcompany']);
Route::POST('upcmp',[companycontroller::class,'setupcompany']);

Route::get('deletecmp/{item}',[companycontroller::class,'deletecompany']);
Route::get('deleteemp/{item}',[employeecontroller::class,'deleteemployee']);


