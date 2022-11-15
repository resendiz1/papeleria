@extends('plantilla')

@section('contenido')
@section('title', 'Perfil Usuario')
<div class="container-fluid">
  <div class="row">
      <div class="col-12 shadow-sm text-center p-3 bg-primary">
          <h2 class="text-white">Perfil del departamento de Sistemas</h2>
          <a href="{{route('catalogo')}}" class="text-white">Ir al catalogo para realizar pedido</a>
      </div>
  </div>


  <div class="row mt-5 justify-content-around">
    <!-- Este es del lado izquierdo -->
    <div class="col-3 bg-white shadow-sm p-4">
      <div class="row">
        <div class="col-12 bg-success text-center rounded mb-3">
            <h3 class="text-white">Ultimos articulos recibidos</h3>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Cantidad</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">Engrapadora</th>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">Engrapadora</th>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">Saca Grapas</th>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">Perforadora</th>
              <td>1</td>  
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Este es del lado izquierdo -->
  </div>

    <!-- Este es del lado derecho -->
    <div class="row mt-5 justify-content-around">
    <div class="col-5 bg-white shadow-sm p-4">
        <div class="row">
          <div class="col-12 bg-primary text-center rounded mb-3">
            <h3 class="text-white">Accesorios de larga duración</h3>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha de entrega</th>
                <th scope="col">Fecha de renovación</th>

              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">Engrapadora</th>
                <td>2</td>
                <td> 26/09/2022 </td>
                <td>27/09/2023</td>
              </tr>
              <tr>
                <th scope="row">Saca Grapas</th>
                <td>2</td>
                <td>26/09/2022</td>
                <td>26/12/2022</td>
              </tr>
              <tr>
                <th scope="row">Perforadora</th>
                <td>1</td>
                <td>26/09/2022</td>
                <td>02/12/2022</td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <!-- Este es del lado derecho -->
  
  </div>

</div>



@endsection