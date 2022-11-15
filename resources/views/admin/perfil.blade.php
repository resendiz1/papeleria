@extends('plantilla')
@section('title', 'Perfil Administradora')
@section('contenido')
@include('admin.nav')


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-5 text-center">
        @if (session('agregar'))
            <div class="alert alert-success p-2 text-center mt-5 p-4 shadow-sm">
              <i class=" fa fa-check-circle"></i>
              {{session('agregar')}} <br>
            </div>
        @endif
      </div>
      <div class="col-12">
        <div class="row mt-3">
          <div class="col-12 text-center">

            <!-- Titulo de la tabla -->
            <h4>Existencias actuales</h4>
            <!-- Titulo de la tabla -->
            <!-- boton que activa el modal para gregar productos -->
              <button class="btn btn-secondary btn-sm mt-5" data-bs-toggle="modal" data-bs-target="#agregar_consumibles">
                <i class="fa fa-plus-circle"></i>
                Agregar nuevo consumible
              </button>
            <!-- boton que activa el modal para gregar productos -->


              <!-- Modal para agregar consumibles por el admin -->
            <div class="modal fade" id="agregar_consumibles" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Agregando Consumibles</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start p-3">
                        <form action="{{route('create.articulos')}}" method="POST">
                          @csrf @method('POST')
                          <div class="form-group">
                            <label for="">Descripción</label>
                            <input type="text" name="descripcion" class="form-control">
                          </div>

                          <div class="form-group mt-3">
                            <label for="">Unidad de medida</label>
                            <select class="form-select" name="unidad" aria-label="Default select example">
                              <option value="paquete">Paquete</option>
                              <option value="pza.">Pza.</option>
                            </select>
                          </div>

                          <div class="form-group mt-3">
                            <label for="">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control">
                          </div>

                          <div class="form-group mt-3">
                            <label for="">¿Duradero?</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="duradero" value="si" id="flexRadioDefault1">
                              <label class="form-check-label" for="flexRadioDefault1">
                                Si, es de larga duración
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="duradero" value="no" id="flexRadioDefault2" checked>
                              <label class="form-check-label" for="flexRadioDefault2">
                                No, no es de larga duración.
                              </label>
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button  class="btn btn-primary">Grabar</button>
                        </form>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                  </div>
                </div>
             </div>
              <!-- Modal para agregar consumibles por el admin -->







            <table class="table  table-hover text-start mt-2">
              <thead class="bg-dark text-white">
                <tr>
                  <th>Descripción</th>
                  <th>Existencia en inventario</th>
                  <th>Unidad de medida</th>
                  <th>Larga duración</th>
                  <th>Cantidad a agregar</th>
                  <th>Grabar</th>
                </tr>
              </thead>
              <tbody>

                @forelse ($todo as $todoItem)
                    <tr>
                      <th>{{$todoItem->descripcion}}</th>
                      <th>{{$todoItem->cantidad}}</th>
                      <th>{{$todoItem->unidad}}</th>
                      <th>{{$todoItem->duradero}}</th>
                      <form action="{{route('articulo.agregar', $todoItem->id)}}" method="POST">
                        @csrf @method('PATCH')
                        <th><input type="number" min="1" name="cantidad" class="form-control form-control-sm add"></th>
                        <th><button class="btn btn-success"> <i class="fa fa-save"></i> </button></th>
                      </form>
                    </tr>
                    
                @empty
                    <li>Nada que en la BD</li>
                @endforelse
            
              </tbody>
            </table>
  
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection
