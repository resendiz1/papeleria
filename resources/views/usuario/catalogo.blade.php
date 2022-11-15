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
  
  
<div class="container-fluid fondo">
    <div class="row p-3 justify-content-center"> <!-- Formulario del pedido -->
      <div class="col-4 col-sm-4 col-md-2 col-lg-3 text-center bg-white p-4 shadow-sm border m-1">
        <div class="row">
          <div class="col-9">
            <label for=""> <b class="size_font"> ARILLO DE PLASTICO </b> </label>
          </div>
          <div class="col-2">
            <input type="number" min="1"  class="form-control form-control-sm" value="1">
          </div>
          <div class="col-12 mt-2">
  
            <div class="collapse" id="collapseExample">
              <div class="form-floating">
                <textarea class="form-control" placeholder="Describer las caracteristicas como tipo, color o tamaño" id="floatingTextarea2" style="height: 90px"></textarea>
                <label for="floatingTextarea2">Caracteristicas (tamaño, color o tipo)</label>
              </div>
            </div>
              <a  data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Agregar caracteristicas
              </a>
          </div>
        </div>
      </div>
    </div> <!-- Formulario del pedido -->
  
  
    <div class="row justify-content-center">
        <div class="col-4 text-center">
        <button class="btn btn-success">
            Lanzar pedido
        </button>
        </div>
    </div>
      
      
</div> 
  
   
@endsection