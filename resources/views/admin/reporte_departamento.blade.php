@extends('plantilla')
@section('title', 'Reporte Departamento')
@include('admin.nav')
@section('contenido')


<div class="container">
    <div class="row bg-white shadow-sm mt-5">
        <div class="col-7">
            <form action="">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Todos</option>
                                <option value="1">RH</option>
                                <option value="2">Sistemas</option>
                                <option value="3">Recepción</option>
                                <option value="4">Algun Otro</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Mes</option>
                                <option value="1">Enero</option>
                                <option value="2">Febrero</option>
                                <option value="3">Marzo</option>
                                <option value="4">Abril</option>
                                <option value="4">Mayo</option>
                                <option value="4">Junio</option>
                                <option value="4">Julio</option>
                                <option value="4">Agosto</option>
                                <option value="4">Septiembre</option>
                                <option value="4">Octubre</option>
                                <option value="4">Noviembre</option>
                                <option value="4">Diciembre</option>

                              </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Año</option>
                                <option value="1">2022</option>
                              </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm mt-1">
                                Buscar Info
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3 bg-white shadow-sm p-4 justify-content-center">
        <div class="col-9">

            <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Duradero</th>
                    <th>Departamento</th>
                    <th>Fecha de entrega</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Engrapadora</th>
                    <th>Es una engrapadora negra</th>
                    <th>1</th>
                    <th>Si</th> 
                    <th>Sistemas</th>
                    <th>21/09/2022</th>   
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-info btn-sm">Imprimir Reporte</button>
        </div>
    </div>
</div>




@endsection