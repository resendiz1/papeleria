@extends('plantilla')
@section('title', 'Catalogo de pedidos')

    
@section('contenido')


<div class="container-fluid">
    <div class="row">
      <div class="col-12 bg-primary  text-center">
        <h2 class="text-white">Catalogo de pedidos</h2>
        <h3 class="text-white">sistemas</h3>
        <a href="{{route('perfil_usuario')}}" class="text-white">Regresar</a>
      </div>
    </div>
</div>
  
<div class="container-fluid fondo">  {{-- abbertura del div --}}


{{-- El bloque de codigo que me va a ayudar a identificar cada input with a counter --}}
@php
  $descripcion = 0;
  $cantidad = 0;
  $unidad = 0;
  $duradero = 0;
  $departamento = 0;
  $caracteristicas = 0;
@endphp
{{-- El bloque de codigo que me va a ayudar a identificar cada input with a counter --}}




{{-- El form que me va ayudar a agregar lo que haya que agregar --}}
<form action="{{route('lanza_pedido')}}" method="POST">
  @csrf

<div class="row p-3 justify-content-center"> <!-- Formulario del pedido -->
@forelse ($articulos as $articulosItem)
    <div class="col-4 col-sm-4 col-md-2 col-lg-3 text-center bg-white p-4 shadow-sm border m-1 ">
      <div class="row">
        <div class="col-9 mt-3">
          <label for=""> <b class="size_font"> {{$articulosItem->descripcion}}  </b> </label>
        </div>
        <div class="col-3">
          <input type="number" min="0"  class="form-control form-control-lg bg-white shadow-sm pedido text-center" name="cantidad{{$cantidad++}}">
          <input type="text" value="{{$articulosItem->descripcion}}" name="descripcion{{$descripcion++}}">
          <input type="text" value="{{$articulosItem->unidad}}" name="unidad{{$unidad++}}">
          <input type="text" value="{{$articulosItem->duradero}}" name="duradero{{$duradero++}}">
          <input type="text" value="sistemas" name="departamento{{$departamento}}">
        </div>
        <div class="col-12 mt-2">
          <div class="collapse" id="a{{$articulosItem->id}}">
            <div class="form-floating">

              <textarea 
                  class="form-control" 
                  placeholder="Describer las caracteristicas como tipo, color o tamaño" 
                  name="caracteristicas{{$caracteristicas++}}" 
                  id="floatingTextarea2" s
                  tyle="height: 90px">
              </textarea>

              <label for="floatingTextarea2">Caracteristicas (tamaño, color o tipo)</label>
            </div>
          </div>
            <a  data-bs-toggle="collapse" href="#a{{$articulosItem->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
              <small>Presiona para agregar caracteristicas personalizadas</small>
            </a>
        </div>
      </div>
    </div>




    







@empty
    <li>Nada que mostrar</li>
@endforelse

</div> <!-- Formulario del pedido -->



  
  
    <div class="row justify-content-center">
        <div class="col-4 text-center">
        <button class="btn btn-success">
            Lanzar pedido
        </button>
        </div>
    </div>
      
  </form>
  {{-- El form que me va ayudar a agregar lo que haya que agregar --}}    


 </div> {{--cerrado del container --}}
  
   


<script>
  

  var a = document.getElementsByClassName('pedido')
  console.log(a.length);
  for (i = 0; i <= a.length; i++ ){


    console.log('Input'+i)
  }

</script>
@endsection