@extends('layouts.app')

@section('title', 'Listado de Notas')

@section('content')
        <main class="content">
            <div class="cards">
                @forelse ($notes as $note)
                    <div class="card card-small">
                        <div class="card-body">
                            <h4>{{ $note }}</h4>

                            <p>
                                {{ $note }}
                            </p>
                        </div>

                        <footer class="card-footer">
                            <a class="action-link action-edit">
                                <i class="icon icon-pen"></i>
                            </a>
                            <a class="action-link action-delete">
                                <i class="icon icon-trash"></i>
                            </a>
                        </footer>
                    </div>
                @empty
                    <p>En este momento no tenemos notas</p>
                @endforelse

                    <div class="card card-small">
                        <div class="card-body">
                            <h4>Cómo usar foreach en Blade</h4>

                            <!-- Comentario de Blade -->

                            @verbatim
                            <p>
                                Podemos usar foreach con la directiva @@foreach.
                                    @{{ nota }}
                            </p>
                            @endverbatim
                        </div>

                        <footer class="card-footer">
                            <a class="action-link action-edit">
                                <i class="icon icon-pen"></i>
                            </a>
                            <a class="action-link action-delete">
                                <i class="icon icon-trash"></i>
                            </a>
                        </footer>
                    </div>

                    <div class="card card-small">
                    <div class="card-body">
                        <h4>¿Para qué sirve Composer?</h4>

                        <p>
                            Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony,
                            así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Instalación de Laravel</h4>

                        <p>
                            Hay 2 formas de instalar Laravel: la primera es a través con Composer,
                            la cual te permite instalar una versión específica de Laravel:
                        </p>

                        <pre>composer create-project laravel/laravel curso-laravel-styde "6.*"</pre>

                        <p>La segunda es con el instalador de Laravel, la cual instalará la versión actual del framework:</p>

                        <pre>laravel new curso-laravel-styde</pre>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card card-big">
                    <div class="card-body">
                        <h4>Rutas y JSON</h4>

                        <p>
                            Recuerda que si retornas un arreglo en una ruta, Laravel lo va a convertir en JSON automáticamente:
                        </p>

                        <pre>
    &lt;?php

    Route::get('/', function () {
        return [
            'Cursos' => [
                'Primeros pasos con Laravel',
                'Crea un panel de control con Laravel',
            ]
        ];
    });
</pre>

                        <p>Producirá el siguiente resultado:</p>

                        <code>{"Cursos":["Primeros pasos con Laravel","Crea un panel de control con Laravel"]}</code>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Front Controller</h4>
                        <p>
                            Front Controller es un patrón de arquitectura donde un controlador
                            maneja todas las solicitudes o peticiones a un sitio web.
                        </p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Cambia el formato de parámetros dinámicos</h4>
                        <p>
                            Puedes colocar el siguiente código en el método <code>boot</code>
                            de <code>app/Providers/RouteServiceProvider.php</code>
                            para restringir cualquier parámetro de las rutas a un formato numérico:
                        </p>

                        <pre>Route::pattern('nombre-del-parametro', '\d+');</pre>

                        <p>Puedes por supuesto usar otras expresiones regulares para restringir a otros formatos.</p>
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
            </div>
        </main>
@endsection
