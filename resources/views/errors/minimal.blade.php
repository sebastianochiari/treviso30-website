<!doctype html>
<html lang="it">

<head>

    @include('partials/_head')

    <!-- Style CSS -->
        <link rel="stylesheet" href="{{ url('/css/style.css') }}">

    <style>
        .code h1 {
            font-family: 'Merriweather', serif !important;
            line-height: 1.75;
        }
    </style>

</head>

<body>

@if(Auth::check())

    @include('partials/_loginToolbar')

@endif

@include('partials/_nav')

<main role="main" class="container">

    <body class="text-center">
    <h4>
        Ops, qualcosa è andato storto!
    </h4>
    <div class="code mt-2">
        <h1>@yield('code') | @yield('message')</h1>
    </div>
    <div class="mt-5">
        <p class="meta mt-3 text-align-center">
            torna a
            <a href="/">
                <b>HOME</b>
            </a>
        </p>
    </div>
    </body>

</main><!-- /.container -->


@include('partials/_defaultJS')

@yield('scripts')

</body>

</html>
