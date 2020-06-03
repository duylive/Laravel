<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function calculator(Request $request){
        $input=$request->result;
        $result= math_eval($input);
        return view('index',compact('result'));
    }
}
