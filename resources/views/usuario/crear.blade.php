@extends('welcome')

@section('main')
<h1 class="mt-4">REGISTRO DE USUARIO</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Registra Nuevo Usuario para Realizar Compras</li>
                    </ol>
                    <div class="alert alert-success" role="alert">
                    </div>
                        <form action="" method="POST">
                            <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingresa Nombre">
                              
                            </div>
                            <div class="form-group">
                              <label for="apellidos">Apellidos</label>
                              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa Apellidos">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa Email">
                              </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa Contraseña">
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                          </form>
@endsection