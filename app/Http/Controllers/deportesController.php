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

    }
}
