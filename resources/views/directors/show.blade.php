@extends('plantilla.layout')

@section('content')


<div class="container">
        <h1 class="text-center">Detalle Director</h1>
        <hr>
    <div class="card">
        <div class="card-header">
          <h2>{{$director->nombre}}</h2>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Una Frase</p>
          <footer class="blockquote-footer">{{$director->nacionalidad}}</footer>
          </blockquote>
        </div>
      </div>
      <a href="{{ url()->previous()}} " class="btn btn-primary">OK</a>

</div>

@endsection
