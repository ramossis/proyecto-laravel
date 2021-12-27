@extends('welcome')

@section('main')
<h1 class="mt-4">PRODUCTOS DISPONIBLES</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Tienda De Ropa On-Line Estas son las Prendas en Tendencia de la Tienda</li>
</ol>
<div class="row">
    @foreach ($productos as $prod)
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <img src="" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$prod->nombre}}</h5>
            <p class="card-text">Precio: {{$prod->precio}} Bs.</p>
            <a href="#" class="btn btn-danger">Comprar</a>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    @endforeach
    
@endsection