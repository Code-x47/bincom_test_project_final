<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Polling_unit;
use App\Models\new_polling_unit;
use App\Models\Announced_pu_result;


class resultController extends Controller
{

    // THIS METHOD IS TO CREATE THE TOTAL RESULT OF ALL THE POLLING UNITS UNDER ANY PARTICULAR LGA
    //JOINED POLLING UNIT TABLE AND ANNOUNCED_PU_TABLE AND LGA TABLE TO GET THE SUM OF TOTAL VOTES PER POLLING UNIT FOR EACH LGA
    public function lgaResult(){
      $search = $_GET['search'];
      $data = DB::table("polling_unit")
     ->join("announced_pu_results","polling_unit.uniqueid","=","announced_pu_results.polling_unit_uniqueid")
     ->join("lga","lga.lga_id","=","polling_unit.lga_id")
      ->where("polling_unit.lga_id",$search)
      ->get(["announced_pu_results.party_score","announced_pu_results.party_abbreviation","polling_unit.polling_unit_name","lga.lga_name"]);

       return view("home.lga_pu_result",compact("data"));
    }
   


    //METHOD THAT SERCHES FOR INDIVIDUAL ANNOUNCED POLLING RESULT
     public function puResult() {
       $search = $_GET['search'];
       $data = Announced_pu_result::where("polling_unit_uniqueid",$search)->get();
       return view("home.pu_results",compact("data"));
     }


     //THIS METHOD IS FOR CREATING NEW POLLING UNIT
     public function newUnit(Request $req) {
        $req->validate([
            "resultId"=>"Required",
            "score"=>"Required",
            "partyName"=>"Required",
            "name"=>"Required"
        ]);


        $data = new new_polling_unit;
        $data->result_id = $req->resultId;
        $data->score = $req->score;
        $data->Party_name = $req->partyName;
        $data->name = $req->name;

        $data->save();
        return back();
     }   

    



}
