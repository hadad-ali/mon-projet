<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">home page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('bjr') ?
                    'active text-success' : '' }} "
                        href="{{ route('bjr') }}">Bonjour page</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('abt') ?
                    'active text-success' : '' }} "
                        href="{{ route('abt') }}">About Us</a>
                </li>

            </ul>
        </div>
    </nav>


    @yield('contenu')

</body>

</html>
