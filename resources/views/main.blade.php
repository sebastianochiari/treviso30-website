<!doctype html>
<html lang="it">

<head>

    @include('partials/_head')

</head>

<body>

    @if(Auth::check())

        @include('partials/_loginToolbar')

    @endif

    @include('partials/_nav')

    <main role="main" class="container">

        @yield('content')

    </main><!-- /.container -->

    @include('partials/_footer')

    @include('partials/_defaultJS')

    @yield('scripts')

</body>

</html>
