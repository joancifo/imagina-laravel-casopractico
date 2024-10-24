<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans">
<div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
    <div
        class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">

                @if (Route::has('login'))
                    <livewire:welcome.navigation/>
                @endif
            </header>

            <div class="div">
                <div class="row">
                    <div class="col-12">
                        {{ auth()->user()->roles }}
                    </div>
                </div>

                <div>
                    @role('Alumno')
                        Tienes el rol 1
                    @endrole
                </div>

            </div>

            <main class="row">

                @foreach($cursos as $curso)
                    <div class="col-3 ">
                        <div class="card">
                            <div class="card-body">
                                {{ $curso->nombre }}
                            </div>
                            <div class="card-footer">
                                @auth
{{--                                    @if(true)--}}
{{--                                        <div>Ya inscrito</div>--}}
{{--                                    @else--}}
                                        <a href="{{ route('inscripcion', $curso) }}">Inscribirme</a>
{{--                                    @endif--}}
                                @else
                                    <a href="{{ route('login') }}">Inicia sesión</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach

            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </div>
</div>
</body>
</html>
