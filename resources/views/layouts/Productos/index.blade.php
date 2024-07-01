@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ropa para Hombre</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($productosHombre as $producto)
                            <li class="list-group-item">{{ $producto->nombre }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ropa para Mujer</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($productosMujer as $producto)
                            <li class="list-group-item">{{ $producto->nombre }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ropa Hot</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($productosHot as $producto)
                            <li class="list-group-item">{{ $producto->nombre }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
