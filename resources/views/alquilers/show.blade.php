@extends('plantilla.layout')

@section('content')
<h1 class="text-center">detalles Alquilar Pelicula</h1>

<div class="container">
    <div class="card">
            <div class="card-header">
                {{$alquilar->cliente->nombre}}
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
            </div>
            <a href="{{ url()->previous()}} " class="btn btn-primary">OK</a>

</div>





@endsection
