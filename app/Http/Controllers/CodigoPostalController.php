<?php

namespace App\Http\Controllers;

use App\Models\codigopostal;
use Illuminate\Http\Request;

class CodigoPostalController extends Controller
{
    //
    public function mostrarCodigosPostales(){
        
        $codigopostal = codigopostal::all();

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
}
