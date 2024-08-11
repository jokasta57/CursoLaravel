@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Clientes') }}</div>

                <form action="{{url('/verFormularioCliente')}}" method = "get" entype = "multipart/form-data">
                    <button type="submit" class="btn btn-primary">Nuevo Cliente</button>
                </form>    

                <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($todos as $ClienteObj)
                            <tr>
                            
                            <td>{{$ClienteObj->id}}</td>
                            <td>{{$ClienteObj->nombre}}</td>
                            <td>{{$ClienteObj->ciudad}}</td>
                            <td>{{$ClienteObj->direccion}}</td>
                            <td>{{$ClienteObj->edad}}</td>
                            <td>{{$ClienteObj->telefono}}</td>
                            <td>
                                <form action="{{url('/editarTablaClienteController/'.$ClienteObj->id)}}" method = "get" entype = "multipart/form-data">
                                    <button type="submit" class="btn btn-primary">Editar</button>
                                </form>

                                <form action="{{url('/formularioeliminar/'.$ClienteObj->id)}}" method = "get" entype = "multipart/form-data">
                                    <button type="submit" class="btn btn-primary">Eliminar</button>
                                </form>

                            </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
