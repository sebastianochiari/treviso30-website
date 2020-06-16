<!doctype html>
<html lang="it">

<head>

    @include('partials/_head')

</head>

<body>

    @include('partials/_dashnav')

    <div class="container-fluid">
        <div class="row">

            @include('partials/_dashsidenav')

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @include('partials._messages')
                @yield('content')
            </main>

        </div>
    </div>

    @include('partials/_defaultJS')

    @yield('scripts')

</body>

</html>
