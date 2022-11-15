<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class articulosController extends Controller
{


    public function agregar(){

        //FALTA LA VALIDACIÓN
        
        Articulo::create([
            'descripcion' => request('descripcion'),
            'cantidad' => request('cantidad'),
            'unidad' => request('unidad'),
            'duradero' =>request('duradero')
        ]);

        return back()->with('agregar', 'El producto fue agregado');


    }


}
