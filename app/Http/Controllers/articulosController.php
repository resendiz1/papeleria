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
        
        //Se obtiene la cantidad del producto en cuestion seleccionado por el ID
        $articulo = DB::table('articulos')->where('id', $id)->first();
        
        //Cantidad sumada de la obtenida por la vista y la obtenida de la BD
        $total = request('cantidad') + $articulo->cantidad;

        //Obtenemos el nombre del producto para pasarlo por la vista
        
        
        

        DB::table('articulos')->where('id', $id)->limit(1)->update(['cantidad' => $total]);

         return back()->with('updated', "Se actualizo la cantidad de <b> $articulo->descripcion </b>");
        
    }

}
