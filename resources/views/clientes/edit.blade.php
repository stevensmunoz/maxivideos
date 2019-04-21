@extends('plantilla.layout')

@section('content')


<div class="container">
<h1 class="text-center">Actualizar Cliente</h1>
<hr>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<form action="{{ route('clientes.update',$cliente->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Cedula:</strong>
                <input type="text" name="cedula" value="{{$cliente->cedula}}" class="form-control" placeholder="Cedula del Cliente">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" value="{{$cliente->nombre}}" class="form-control" placeholder="Nombre del Cliente">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Dirección:</strong>
                <input type="text" name="direccion" value="{{$cliente->direccion}}" class="form-control" placeholder="Direccíon del Cliente">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Teléfono:</strong>
                <input type="text" name="telefono" value="{{$cliente->telefono}}" class="form-control" placeholder="Teléfono del cliente">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                <input type="text" name="correo" value="{{$cliente->correo}}" class="form-control" placeholder="Correo del cliente">
            </div>
        </div>
        <div class="col-md-12 text-right">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{ url()->previous()}} " class="btn btn-danger">Atras</a>
        </div>
    </div>
</form>

</div>

@endsection
