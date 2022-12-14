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

    
      //Aqui seleccione todos los input y los conte, despues dividi entre el numero de inputs de cada tarjeta y con eso saco el numero de productos.
         $iteraciones = count(request()->except('_token'))/6;
        
        for($i=1; $i<=$iteraciones;$i++){
            
            
            echo request('cantidad');

            // if(request()->only('cantidad'.$i)!=null || request()->only('cantidad'.$i)!=0){
                
                
                
            //     Pedido::create([
            //          'cantidad' => request()->only('cantidad'.$i),
            //          'descripcion' => request()->only('descripcion'.$i),
            //          'unidad' => request()->only('unidad'.$i),
            //          'duradero' => request()->only('duradero'.$i),
            //          'departamento' => request()->only('departamento'.$i),
            //          'mes_anio' => date("m/y"),
            //          'caracteristicas' => request()->only('caracteristicas'.$i)
            //     ]);

                
            // }
            // else{
            //     echo 'Hay algo vacio';
            // }

            //return back()->with('enviado', 'El pedido fue enviado');
        }
    
    }




    public function departamentos(){

          $departamentos = DB::table('pedidos')->distinct()->get('departamento');
        //  $departamentos = DB::select("SELECT DISTINCT departamento FROM pedidos ");

         return view('admin.por_revisar', compact('departamentos'));
    }





    public function pedido_departamento($departamento){


         $mes_actual = date("m/y");

        //Consultar los pedidos por mes por departamento
         $pedidos = DB::select("SELECT*FROM pedidos WHERE departamento LIKE '$departamento' AND mes_anio LIKE '$mes_actual'");
//         return $mes_pedido = DB::table('pedidos')->get('created_at')->where('departamento', 'sistemas');
        
         return view('admin.pedido', compact('pedidos'));
        
    }
}
