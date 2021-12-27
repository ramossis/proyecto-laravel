@extends('welcome')

@section('main')
<h1 class="mt-4">REGISTRO DE PRODUCTO</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Registra Nuevo Usuario para Realizar Compras</li>
                    </ol>
                        <form action="{{ route('productos.store')}}" method="POST">
                          @csrf
                            <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingresa Nombre">
                              
                            </div>
                            <div class="form-group">
                              <label for="descripcion">Descripcion</label>
                              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa Descripcion">
                            </div>
                            <div class="form-group">
                                <label for="text">Precio</label>
                                <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa Precio">
                              </div>
                              <div class="form-group">
                                <label for="text">Stock</label>
                                <input type="text" class="form-control" id="stock" name="stock" placeholder="Ingresa Stock">
                              </div>
                              <div class="form-group">
                                <label for="text">Categoria</label>
                                <select name="categoria">
                                   @foreach ($categorias as $cat)
                                   <option value={{ $cat->id }}> 
                                    {{ $cat->nombre }}
                                  </option>
                                   @endforeach
                                </select>
                              </div>
                            <div class="form-group">
                                <label for="Imagen">Imagen</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" placeholder="Ingresa Contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                          </form>
@endsection