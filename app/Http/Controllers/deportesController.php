<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\deportesvario;

class deportesController extends Controller
{
    //
    public function registro(Request $request)
    {
    	//dd($request);   imprime la informacion que recogio del formulario
    	$deportesvarios = new deportesvario;
		$deportesvarios['deporte'] = $request['deporte'];
		$deportesvarios['padre'] = $request['padre'];
		$deportesvarios['descripcion'] = $request['descripcion'];
		$deportesvarios->save();   

		//echo "<h1>Deporte registrado!!!</h1>";
        return view('registrarDeporte');
    }
    
    public function index()
    {
        //constructor de consultas
    	//$deportesvarios = \DB::table('deportesvarios')->select('id','deporte')->get();
        
        //eloquent
        $deportesvarios = deportesvario::all();
        return view('listadoDeportes',compact('deportesvarios'));
    }        
            
}
