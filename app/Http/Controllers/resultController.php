<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Polling_unit;
use App\Models\new_polling_unit;
use App\Models\Announced_pu_result;


class resultController extends Controller
{
    public function lgaResult(){
     $search = $_GET['search'];
      $data = DB::table("polling_unit")
     ->join("announced_pu_results","polling_unit.uniqueid","=","announced_pu_results.polling_unit_uniqueid")
      ->where("polling_unit.lga_id",$search)
      ->sum("announced_pu_results.party_score");

      return view("home.lga_pu_result",compact("data"));
    }


     public function puResult() {
       $search = $_GET['search'];
       $data = Announced_pu_result::where("polling_unit_uniqueid",$search)->get();
       return view("home.pu_results",compact("data"));
     }

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
