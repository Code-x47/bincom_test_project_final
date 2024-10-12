<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resultController;

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



//THIS SECTION CONTROL THE PAGE THAT DISPLAYS THE SUMMED TOTAL  OF ALL POLLIN UNIT UNDER ANY PARTICLUAR LGA
Route::get("lgaResult",[resultController::class,"lgaResult"]);
//END

//THIS SECTION CONTROL THE PAGE THAT DISPLAYS RESULT FOR EACH POLLING UNIT
Route::get("puResult",[resultController::class,"puResult"]);
Route::get("edit/{result_id}",[resultController::class,"edit"]);
//END

//THIS IS ROUTE IS WHAT WAS EXTENDED
Route::view("dashboard","home.dashboard");
//END


//THE FIRST PAGE OF THE WEB APP
Route::view("index","home.index");
//END


//CREATE A NEW POLLING UNIT ROUTE
Route::Post("/newUnit",[resultController::class,"newUnit"]);
//END



