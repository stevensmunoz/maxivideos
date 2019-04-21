@extends('plantilla.layout')

@section('content')


<div class="container">
<h1 class="text-center">Crear Director</h1>
<hr>
<form action="{{ route('directors.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre del director" value="{{ old('nombre') }}">
                @if($errors->has('nombre'))
                    <strong class="text-danger">{{ $errors->first('nombre')}}</strong>
                @endif
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Nacionalidad:</strong>
                <input type="text" name="nacionalidad" class="form-control" placeholder="Nacionalidad del director" value="{{ old('nacionalidad') }}">
                @if($errors->has('nacionalidad'))
                    <strong class="text-danger">{{ $errors->first('nacionalidad')}}</strong>
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
