@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white">
                    Hombre
                </div>
                <div class="card-body text-center">
                    <p class="card-text">Descubre nuestra colección para hombres.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white">
                    Mujer
                </div>
                <div class="card-body text-center">
                    <p class="card-text">Explora nuestra selección para mujeres.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white">
                    Productos Hot
                </div>
                <div class="card-body text-center">
                    <p class="card-text">Descubre nuestros productos más populares.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Ver más</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mb-3">
                <div class="card-header bg-dark text-white">
                    Resumen de Inventario
                </div>
                <div class="card-body text-center">
                    <p class="card-text">Productos en stock: 450</p>
                    <p class="card-text">Productos agotados: 15</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Gestionar inventario</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Dashboard de Administración</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header bg-dark text-white">
                                    Ventas Recientes
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">$12,540</h5>
                                    <p class="card-text">Últimos 7 días</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Ver detalles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header bg-dark text-white">
                                    Productos más Vendidos
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Camisetas</h5>
                                    <p class="card-text">+25 unidades</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header bg-dark text-white">
                                    Clientes Activos
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">+150</h5>
                                    <p class="card-text">Total en el sistema</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Ver todos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info" role="alert">
                                ¡Bienvenido al dashboard de administración! Aquí puedes controlar todas las operaciones clave de tu tienda de ropa.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="#" class="btn btn-primary btn-lg">Productos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="contact-info text-center mt-4">
                <p>Para más información, contáctanos:</p>
                <ul>
                    <li>Teléfono: 123-456-789</li>
                    <li>Email: contacto@ejemplo.com</li>
                    <li>Dirección: Calle Ejemplo, Ciudad, País</li>
                </ul>
                <p>Otros enlaces útiles:</p>
                <ul>
                    <li><a href="#">Política de privacidad</a></li>
                    <li><a href="#">Términos y condiciones</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
