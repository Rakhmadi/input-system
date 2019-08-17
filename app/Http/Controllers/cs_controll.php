<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cs_controll extends Controller
{
    public function index(){
        $ini = model_cs::OrderBy('create_at','desc')->paginate(20);
        return view('home',compact('ini'));
    }
    public function show($id){
        $ini=model_cs::findorfail($id);
        return $ini;
    }
}
