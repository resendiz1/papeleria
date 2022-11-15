@extends('plantilla')
@include('admin.nav')


@section('contenido')



<div class="container">

    <div class="row">
        <div class="col-12 mt-3">
            <h3 class="text-center">Pedidos por revisar</h3>
        </div>
    </div>


    <div class="row justify-content-center mt-3">
        <div class="col-3 p-4 h4 shadow text-center m-2">
            <a href="#">Pedido de Sistemas</a>
        </div>
        <div class="col-3 p-4 h4 shadow text-center m-2">
            <a href="#">Pedido de Seguridad e Higiene</a>
        </div>
        <div class="col-3 p-4 h4 shadow text-center m-2 bg-success">
            <a href="#" class="text-white">Pedido de Seguridad e Higiene</a>
        </div>
    </div>


  </div>

@endsection