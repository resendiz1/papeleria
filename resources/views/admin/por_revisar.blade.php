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

        @forelse ($departamentos as $departamentosItem)
            <div class="col-3 p-4 h4 shadow text-center m-2">
                <a href="{{route('departamento.pedido', $departamentosItem->departamento)}}">{{$departamentosItem->departamento}}</a>
            </div>
        @empty
            <li>No hay nada</li>
        @endforelse


    </div>


  </div>

@endsection