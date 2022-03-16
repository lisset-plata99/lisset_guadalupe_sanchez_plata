<?php

namespace App\Http\Controllers;

use App\Models\Canciones;
use Illuminate\Http\Request;

class CancionesController extends Controller
{
    //

    public function obtenerCodigos(){
        $codigos = Canciones::all();

        foreach($codigos as $codigo){
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
