<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articulosController extends Controller
{


    public function crear(){

        //FALTA LA VALIDACIÓN
        Articulo::create([
            'descripcion' => request('descripcion'),
            'cantidad' => request('cantidad'),
            'unidad' => request('unidad'),
            'duradero' =>request('duradero')
        ]);

        return back()->with('agregar', 'El producto fue agregado');
    }



    public function obtener(){

        $todo = Articulo::all();
        return view('admin.perfil', compact('todo'));
    }



    public function agregar($id){
        
        $cantidad = DB::table('articulos')->where('id', $id)->first();
        
        $total = request('cantidad') + $cantidad;
         

         return $total ;
        
    }

}
