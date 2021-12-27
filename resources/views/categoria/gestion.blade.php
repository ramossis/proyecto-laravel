@extends('welcome')

@section('main')
<h1 class="mt-4">GESTION DE CATEGORIAS</h1>
  @if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status')}}
    </div>
  @elseif (session('delete'))
  <div class="alert alert-danger" role="alert">
    {{ session('delete')}}
  </div>
@endif
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Registra Nuevo Usuario para Realizar Compras</li>
</ol>
<a  class ="btn btn-primary"href="{{ route('categorias.crear') }}">
        Crear Prodcuto
</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">ACCIONES</th>
      </tr>
    </thead>
    @foreach ($categorias as $cat )
    <tbody>
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->nombre }}</td>
            <td>
              <form action="{{ route('categoria.destroy', $cat) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            <form action="">
              <button type="submit" class="btn btn-warning">Eliminar</button>
            </form>
            </td>
          </tr>
        </tbody>
    @endforeach
  </table>
@endsection