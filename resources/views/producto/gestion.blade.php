@extends('welcome')

@section('main')
<h1 class="mt-4">GESTION DE PRODUCTOS</h1>
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
<a  class ="btn btn-primary"href="{{ route('productos.crear') }}">
        Crear Producto
</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Precio</th>
        <th scope="col">Stock</th>
        <th scope="col">Categoria</th>
        <th scope="col">Imagen</th>
        <th scope="col">ACCIONES</th>
      </tr>
    </thead>
    @foreach ($productos as $prod )
    <tbody>
        <tr>
            <td>{{ $prod->id }}</td>
            <td>{{ $prod->nombre }}</td>
            <td>{{ $prod->descripcion }}</td>
            <td>{{ $prod->precio }}</td>
            <td>{{ $prod->stock }}</td>
            <td>{{ $prod->categoria->nombre }}</td>
            <td>{{ $prod->imagen}}</td>
            <td>
              <form action="{{ route('productos.destroy', $prod) }}" method="POST">
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