<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodigoPostal extends Model
{
    use HasFactory;
    protected $table = 'codigospostales2';  

    protected $fillable = [
        'id','codigo','asentamiento','tipo_asenta','municipio','estado','ciudad'
     ];
}
