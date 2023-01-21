
@extends('plantilla')
@include('admin.nav')
@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5  p-5 mt-5 bg-white">
                <div class="row justify-content-center">

                    <form action="{{route('alta_usuarios')}}" method="POST">
                        @csrf
                        <div class="col-9 text-center mb-5">
                            <h3>Registro de usuarios</h3>
                            @if (session('creado'))
                                <div class="alert alert-success p-3 text-center font-weght-bold">
                                    {{session('creado')}}
                                </div>
                            @endif
                        </div>

                        <div class="col-9">
                                <label for="">Nombre completo</label>
                                <input type="text" value="Arturo Resendiz López" class="form-control"  name="nombre" id="">
                        </div>

                        <div class="col-9 mt-4">
                            <label for="">Departamento:</label>
                            <select class="form-select" name="departamento" aria-label="Default select example">
                                <option selected>Sistemas</option>
                                <option value="2">Trafico</option>
                                <option value="3">sho que se</option>
                            </select>
                        </div>

                        <div class="col-9 mt-4">
                            <label for="">Correo Electronico</label>
                            <input type="email" value="resendiz.galleta@gmail.com" name="correo" class="form-control">
                        </div>

                        <div class="col-9 mt-4">
                            <label for="">Planta:</label>
                            <select class="form-select" name="planta" aria-label="Default select example">
                                <option selected>Planta 1</option>
                                <option value="planta 2">Planta 2</option>
                                <option value="planta 3">Planta 3</option>
                            </select>
                        </div>

                        <div class="col-9 mt-4 p-5 text-center">
                            <button class="btn btn-success">
                                <i class="fa fa-save"></i>
                                Guardar
                            </button>
                        </div>
            
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection