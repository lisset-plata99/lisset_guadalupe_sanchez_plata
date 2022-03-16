<?php

namespace App\Http\Controllers;

use App\Models\CodigoPostal;
use Illuminate\Http\Request;

class CodigoPostalController extends Controller
{
    //
    public function mostrarCodigosPostales(){
        $codigopostal = CodigoPostal::all();

        foreach($codigopostal as $codigo){
            echo $codigo->id . '<br>';
            echo $codigo->codigo . '<br>';
            echo $codigo->asentamiento . '<br>';
            echo $codigo->tipo_asenta . '<br>';
            echo $codigo->municipio . '<br>';
            echo $codigo->estado . '<br>';
            echo $codigo->ciudad . '<br>';
            echo '<hr>';
        }
    }

    public function codigoPostal(){
        $codigos['data'] = CodigoPostal::orderby("codigo","asc")
        ->select('codigo','codigo')
        ->distinct()
        ->get();
        return view('index')->with("codigos",$codigos);

    }

    public function obtenerTipoAsenta($codigoBuscado=0){
        $tipo_asentas['data'] = CodigoPostal::orderby("tipo_asenta","asc")
           ->select('tipo_asenta','tipo_asenta')
           ->where('codigo',$codigoBuscado)
            ->distinct()
           ->get();
   
        return response()->json($tipo_asentas);
   
      }
}
