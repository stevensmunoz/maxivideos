@extends('plantilla.layout')

@section('content')
<h1 class="text-center">Cliente</h1>

<div class="container">
    <a class="btn btn-info mb-3" href="{{ route('clientes.create') }}">Agregar Cliente</a>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">E-mail</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($clientes as $cliente)
            <tr>
              <th scope="row">{{ $cliente->id }}</th>
                <td>{{ $cliente->cedula}}</td>
                <td><a href="{{ route('clientes.show',$cliente->id) }}">{{ $cliente->nombre }}</td></a>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->correo }}</td>
                <td><a href="{{ route('clientes.edit',$cliente->id) }}" class="btn-sm btn-info botoninput"><i class="far fa-edit"></i></a>
                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('Quiere borrar el registro')" ><i class="far fa-trash-alt"></i></button>
                </form>
                </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      {{ $clientes->links() }}
</div>

@endsection
