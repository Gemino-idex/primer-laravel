<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

    <div class="flex min-h-screen">

        <div class="w-75 bg-gray-800 flex flex-col px-3 pt-6">
            <div class="text-white flex items-center gap-2">
                <!--logo-->
                <div class="bg-blue-700 p-3 rounded-lg">
                    <i class="fas fa-user-cog text-2x1"></i>
                </div>Panel de Administrador
            </div>
            <div class="pl-6 mt-4">
                @include('layouts.partials.menu')
            </div>

        </div>

        <div class="flex-1 bg-slate-100">
            <div class="bg-slate-200 p-4 flex justify-between items-center px-4">
                <div>
                    Sistema de Gestión de Biblioteca | <span class="font-bold text-lg">@yield('subtitulo')</span>
                </div>
                <div>
                    @yield('boton_crear')
                </div>
            </div>
            <div class="p-5">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>

</html>