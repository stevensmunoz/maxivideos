@extends('plantilla.layout')

@section('content')


<div class="container">
<h1 class="text-center">Crear Cliente</h1>
<hr>
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Cedula:</strong>
                <input type="text" name="cedula" class="form-control" placeholder="Cedula Cliente">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre del Cliente">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Dirección:</strong>
                <input type="text" name="direccion" class="form-control" placeholder="Dirección">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Teléfono:</strong>
                <input type="text" name="telefono" class="form-control" placeholder="Teléfono">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>correo:</strong>
                <input type="text" name="correo" class="form-control" placeholder="Correo Electronico">
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
