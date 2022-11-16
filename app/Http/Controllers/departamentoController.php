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


    public function pedido(){

      
        $iteraciones = count(request()->all());
        
        for($i=0; $i<$iteraciones;$i++){
            
            if(request('input'.$i)!=null || request('input'.$i)!=0){
                
                Pedido::create([
                     'descripcion' => request('input'.$i),
                     'cantidad' => request('input'.$i),
                     'unidad' => request('input'.$i),
                     'duradero' => request('input'.$i),
                     'departamento' => request('input'.$i)
                ]);

                echo 'Agregado'. $i;
            }
            else{

            }


          
        }
    
    }
}
