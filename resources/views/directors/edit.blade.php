@extends('plantilla.layout')

@section('content')


<div class="container">
<h1 class="text-center">Actualizar Director</h1>
<hr>
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<form action="{{ route('directors.update',$director->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
            <input type="text" name="nombre" value="{{$director->nombre}}" class="form-control" placeholder="Nombre del director">
            @if($errors->has('nombre'))
            <strong class="text-danger">{{$errors->first('nombre')}}</strong>
            @endif
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nacionalidad:</strong>
                <input type="text" name="nacionalidad" value="{{$director->nacionalidad}}" class="form-control" placeholder="Nacionalidad del director">
                @if($errors->has('nacionalidad'))
                    <strong class="text-danger">{{$errors->first('nacionalidad')}}</strong>
                @endif
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
