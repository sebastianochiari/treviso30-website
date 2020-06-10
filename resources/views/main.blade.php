<!doctype html>
<html lang="it">

<head>

    @include('partials/_head')

</head

<body>

    <!-- inserire controllo per decidere se includere o no la navbar (e sotto il footer) se ci troviamo nella dashboard --> 
    @include('partials/_nav')

    <main role="main" class="container">

        @yield('content')

    </main><!-- /.container -->

    @include('partials/_footer')

    @include('partials/_defaultJS')

    @yield('scripts')

</body>

</html>
