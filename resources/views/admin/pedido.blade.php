@extends('plantilla')
@section('title', 'Pedido')
@include('admin.nav')
@section('contenido')



  <div class="container">
      <div class="row justify-content-center">
          <div class="col-12 mt-4 text-center">
            <h2>Pedidos de</h2>  
            <h3>{{$pedidos[0]->departamento}}</h3>
          </div>
          <div class="col-12">    
            <table class="table  table-hover text-start mt-3">
              <thead class="bg-primary text-white">
                <tr>
                  <th>Nombre</th>
                  <th>Cantidad solicitada</th>
                  <th>Cantidad Aprobada</th>
                  <th>Aprobado</th>
                  <th>No aprobado</th>
                </tr>
              </thead>
              <tbody>

                @php
                  $descripcion = 0;
                  $cantidad = 0;
                  $aprobados = 0;
                  $aprobado = 0;
                  $desaprobado = 0;
                @endphp


      <form action="{{route('aprobados')}}" method="POST"> 
        @csrf
        
                @forelse ($pedidos as $pedidosItem)
                  <!-- Esta un desmadre por los Radio Button -->
                        <tr>
                          <th>{{$pedidosItem->descripcion}}</th>
                          <input type="hidden" name="descripción{{$descripcion++}}" value="{{$pedidosItem->descripcion}}">

                          <th>{{$pedidosItem->cantidad}}</th>
                          <input type="hidden" value="{{$pedidosItem->cantidad}}" name="cantidad{{$cantidad++}}">

                          <th> <input type="number"  name="aprobado{{$aprobado}}" class="form-control form-control-sm " value="0"></th>

                          <th>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault{{$aprobado++}}" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  </label>
                                </div>
                          </th>
        
                          <th>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault{{$desaprobado++}}" id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                  </label>
                                </div>
                          </th>

                        </tr>
                  <!-- Esta un desmadre por los Radio Button -->
                @empty
                    
                @endforelse



              </tbody>
            </table>            
           </div> 
           <div class="col-4 text-center">
              <button class="btn btn-success">
                  <i class="fa fa-save"></i>
                  Grabar
              </button>
           </div>



      </form>

      </div>

  </div>
@endsection