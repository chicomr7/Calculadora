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
    public function menu(){
        return view ('menu');
    }
    public function calcularSoma(Request $request){
        $valor1=$request->valor1;
        $valor2=$request->valor2;
        $result= ($valor1 + $valor2);
        return view('resultSoma', compact('valor1','valor2','result'));
    }
    public function calcularSub(Request $request){
        $valor1=$request->valor1;
        $valor2=$request->valor2;
        $result= ($valor1 - $valor2);
        return view('resultSub', compact('valor1','valor2','result'));
    }
    public function calcularMulti(Request $request){
        $valor1=$request->valor1;
        $valor2=$request->valor2;
        $result= ($valor1 * $valor2);
        return view('resultMulti', compact('valor1','valor2','result'));
    }
    public function calcularDiv(Request $request){
        $valor1=$request->valor1;
        $valor2=$request->valor2;
        $result= ($valor1 / $valor2);
        return view('resultDiv', compact('valor1','valor2','result'));
    }

}
