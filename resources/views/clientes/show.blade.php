@extends('plantilla.layout')

@section('content')


<div class="container">
        <h1 class="text-center">Detalle Cliente</h1>
        <hr>
    <div class="card">
        <div class="card-header">
          <h2>{{$cliente->cedula}}</h2>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Una Frase</p>
          <footer class="blockquote-footer">{{$cliente->nombre}}</footer>
          </blockquote>
        </div>
      </div>
      <a href="{{ url()->previous()}} " class="btn btn-primary">OK</a>

</div>

@endsection
