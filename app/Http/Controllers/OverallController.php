<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\EyrcRanking;

class OverallController extends Controller
{
    public function eyrc()
    {
        $eyrc = EyrcRanking::leftjoin('college_master_list.college_list as cml', 'cml.elsi_clg_id','eyrc_rankings.elsi_clg_id')->select('cml.clg_code','cml.college_name','eyrc_rankings.selected_stage2','eyrc_rankings.merit_certi')->where('eyrc_rankings.year',2018)->get();

        return response()->json($eyrc);

    }
    public function eyic(){

    }
    public function eyrdc(){

    }
     public function efsi(){

    } 
      public function tbt(){

    }
      public function others(){

    }
}
