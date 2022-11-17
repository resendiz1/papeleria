<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class departamentoController extends Controller
{
    public function obtener_catalogo(){

       $articulos = DB::table('articulos')->get();


        return view('usuario.catalogo', compact('articulos'));
    }


    public function catalogo(){

      
        $iteraciones = count(request()->all());
        
        for($i=0; $i<$iteraciones;$i++){
            
            if(request('input'.$i)!=null || request('input'.$i)!=0){
                
                echo $i;
                Pedido::create([
                     'cantidad' => request('cantida'.$i),
                     'descripcion' => request('descripcion'.$i),
                     'unidad' => request('unidad'.$i),
                     'duradero' => request('duradero'.$i),
                     'departamento' => request('departamento'.$i)
                ]);

                echo 'Agregado'. $i;
            }



          
        }
    
    }
}
