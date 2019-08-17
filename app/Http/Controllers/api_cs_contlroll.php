<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\resources\cs_resc_contr_cs as inou;
use App\model_cs;
class api_cs_contlroll extends Controller
{
    public function showApiall(){
          $is=model_cs::All();
          return inou::collection($is);
    }
    public function skc(){
        return view('input');
    }
    public function ext(Request $req){
 
    }
}
