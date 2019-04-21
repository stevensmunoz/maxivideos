@extends('plantilla.layout')

@section('content')
<h1 class="text-center">Director</h1>

<div class="container">
    <a class="btn btn-info mb-3" href="{{ route('directors.create') }}">Agregar Director</a>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nacionalidad</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($directors as $director)
            <tr>
              <th scope="row">{{ $director->id }}</th>
                <td><a href="{{ route('directors.show',$director->id) }}">{{ $director->nombre }}</td></a>
                <td>{{ $director->nacionalidad }}</td>
                <td>
                <a href="{{ route('directors.edit',$director->id) }}" class="btn-sm btn-info botoninput"><i class="far fa-edit"></i></a>
                <form action="{{ route('directors.destroy',$director->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-sm btn-danger mt-3" onclick="return confirm('Quiere borrar el registro')" ><i class="far fa-trash-alt"></i></button>
                </form>
                </td>
            </tr>
          @endforeach

        </tbody>
      </table>
      {{ $directors->links() }}
</div>

@endsection
