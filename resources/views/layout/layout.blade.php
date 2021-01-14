<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    {{-- hoja de estilo boostrapt4 --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- importamos chartJS  --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
</head>

<body>
    <header>
        <?php function activeMenu($url){ return request()->is($url) ? 'active' : ''; } ?>

        <nav class="navbar navbar-default">

            <ul class="nav navbar-nav">
                <li class="{{ activeMenu('/') }}">
                    <a href="/">INICIO</a>
                </li>
                
                <li class="{{ activeMenu('graficas*') }}">
                    <a href="{{ route('graficas.index') }} ">Gestion de grafica</a>
                </li>
            </ul>

        </nav> 
    </header>

    <br>
    @yield('contenido')
    <hr>
    <footer class="footer">&nbsp; Copyright ° {{ date('Y')}}</footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>