@extends('plantilla')
@section('title', 'Login')
    

<div class="container-fluid">
    <div class="row p-3 bg-primary">
        <div class="col-12 text-start">
            <h5 class="text-white">Login</h5>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-4 bg-white p-5 shadow-sm">
            <h3 class="text-center">Login</h3>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group mt-5">
                    <label for="">Correo</label>
                    <input type="mail" name="email"  class="form-control">
                </div>
                <div class="form-group mt-5">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group mt-5 text-center">
                    <button class="btn btn-success">
                        <i class=" fa fa-key mx-2"></i>
                        Entrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>  
