<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pedido;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class departamentoController extends Controller
{


    public function obtener_catalogo(){

       $articulos = DB::table('articulos')->get();
       return view('usuario.catalogo', compact('articulos'));
    
    }


    public function catalogo(){

        
        //Aqui seleccione todos los input y los conte, despues dividi entre el numero de inputs de cada tarjeta y con eso saco el numero de productos.
         $iteraciones = count(request()->except('_token'))/6;
                
            for($i=0; $i<=$iteraciones;$i++){
     
                if(request('cantidad'.$i)!=0){
                                    
                    Pedido::create([
                        'cantidad' => request('cantidad'.$i),
                        'descripcion' => request('descripcion'.$i),
                        'unidad' => request('unidad'.$i),
                        'duradero' => request('duradero'.$i),
                        'departamento' => request('departamento'.$i),
                        'mes_anio' => date("m/y"),
                        'caracteristicas' => request('caracteristicas'.$i)
                    ]);
                    
                }
                else{
                    echo 'Hay algo vacio';
                }

            }

         return back()->with('enviado', 'El pedido fue enviado');
    
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





    public function login_user(){

        $credenciales = request()->only('email', 'password');
        
        if(Auth::attempt($credenciales)){
            request()->session()->regenerate();
            return 'estas logeado';
        }
        else{
            return 'no estas logeado';
        }
    }


    public function registro_usuarios(){



       //Falta validar datos
        User::create([
            'name' => request('nombre'),
            'departamento' =>request('departamento'),
            'email' => request('correo'),
            'password' => bcrypt(request('correo')),
            'planta' => request('planta')
        ]);


        return back()->with('creado', 'Usuario Creado');

    }


    public function aprobados(){
        return request();
    }



}



