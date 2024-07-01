@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido</div>

                <div class="card-body">
                    ¡Bienvenido a nuestra tienda de ropa!

                    <!-- Contenido adicional de bienvenida -->
                    <p>Esta es la página de bienvenida de tu tienda de ropa. Puedes agregar contenido adicional aquí, como información sobre tus productos, promociones actuales, etc.</p>

                    <!-- Enlace al registro o inicio de sesión -->
                    @guest
                        <p>Para comenzar a explorar nuestros productos, por favor <a href="{{ route('register') }}">regístrate</a> o <a href="{{ route('login') }}">inicia sesión</a>.</p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
