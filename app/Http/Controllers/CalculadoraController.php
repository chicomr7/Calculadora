<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function soma(){
        return view ('soma');
    }
    public function sub(){
        return view ('sub');
    }
    public function multi(){
        return view ('multi');
    }
    public function div(){
        return view ('div');
    }
    public function calcularSoma(Request $request){
        $valor1=$request->valor1;
        $valor2=$request->valor2;
        $result= ($valor1 + $valor2);
        return view('result', compact('valor1','valor2','result'));
    }

}
