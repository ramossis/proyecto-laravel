@extends('welcome')

@section('main')
<h1 class="mt-4">REGISTRO DE CATEGORIA</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Registra Nueva Categoria </li>
                    </ol>
                    
                        <form action="{{route('categorias.store')}}" method="POST">
                          @csrf
                            <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingresa Nombre Categoria">
                              
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                          </form>
@endsection