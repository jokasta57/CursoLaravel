@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Cliente') }}</div>

                <div class="card-body">

                    <form action="{{url('/crearFormularioClienteController')}}" method = "get" entype = "multipart/form-data">

                        <label for="nombre">nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"  aria-describedby="emailHelp" placeholder="Introduce el nombre del cliente">
                        
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" aria-describedby="emailHelp" placeholder="Introduce la ciudad de residencia">
                        
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="emailHelp" placeholder="Introduce la dirección del cliente">
                        
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad" aria-describedby="emailHelp" placeholder="Introduce la edad del cliente">

                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp" placeholder="Introduce el teléfono del cliente">
                        
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
