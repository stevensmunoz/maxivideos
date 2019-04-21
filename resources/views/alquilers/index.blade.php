@extends('plantilla.layout')

@section('content')
<h1 class="text-center">Alquilar Pelicula</h1>

<div class="container">
    <a class="btn btn-info mb-2" href="{{ route('alquilers.create') }}">Alquilar Pelicula</a>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pelicula</th>
            <th scope="col">Cedula</th>
            <th scope="col">Cliente</th>
            <th scope="col">Fecha Alquiler</th>
            <th scope="col">Fecha Devolución</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($alquilers as $alquiler)
            <tr>
              <th scope="row">{{ $alquiler->id }}</th>
                <td>{{ $alquiler->pelicula->nombre }}</td>
                <td>{{ $alquiler->cliente->cedula }}</td>
                <td>{{ $alquiler->cliente->nombre }}</td>
                <td>{{ $alquiler->fecha_alquiler }}</td>
                <td>{{ $alquiler->fecha_devolucion }}</td>
                <td><a href="{{ route('alquilers.edit',$alquiler->id) }}" class="btn-sm btn-info botoninput"><i class="far fa-edit"></i></a>
                <form action="{{ route('alquilers.destroy',$alquiler->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('Quiere borrar el registro')" ><i class="far fa-trash-alt"></i></button>
                </form>
                </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      {{ $alquilers->links() }}
</div>




@endsection
