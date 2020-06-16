<!doctype html>
<html lang="it">

<head>

    @include('partials/_head')

</head>

<body>

    @include('partials/_nav')

    <main role="main" class="container">

        @yield('content')

    </main><!-- /.container -->

    @include('partials/_footer')

    @include('partials/_defaultJS')

    @yield('scripts')

</body>

</html>
