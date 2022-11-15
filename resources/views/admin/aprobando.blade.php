@extends('plantilla')
@include('admin.nav')

@section('title', 'Revisando Pedidos')
    


@section('contenido')

<div class="container">  
    <div class="row justify-content-center">
        <div class="col-12 mt-4 text-center">
            <h4>Pedidos de Sistemas</h4>
        </div>
        
        <div class="col-12">
                
          <table class="table  table-hover text-start mt-3">
            <thead class="bg-primary text-white">
              <tr>
                <th>Nombre</th>
                <th>Descripción adicional</th>
                <th>Cantidad Aprobada</th>
                <th>Aprobado</th>
                <th>No aprobado</th>

              </tr>
            </thead>
            <tbody>
        <!-- Esta un desmadre por los Radio Button -->
              <tr>
                <th>ETIQUETAS 4X2 10 HOJAS 100 ETIQ</th>
                <th>10</th>
                <th> <input type="number" class="form-control form-control-sm " value="2" > </th>

                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        </label>
                      </div>
                </th>

                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        </label>
                      </div>
                </th>
              </tr>
        <!-- Esta un desmadre por los Radio Button -->
            </tbody>
          </table>            
         </div> 
         <div class="col-4 text-center">
            <button class="btn btn-success">
                <i class="fa fa-save"></i>
                Grabar
            </button>
         </div>
    </div>
</div>



@endsection