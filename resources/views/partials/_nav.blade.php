<div id="header" class="container">

    <header class="blog-header py-3">
        <div class="flex-nowrap justify-content-between align-items-center">
            <div class="text-center">
                <a class="blog-header-logo text-dark" href="/">
                    Treviso 30 News
                    <br>
                    <div class="blog-header-logo-subtitle mt-1">
                        Il mensile di informazione della Marca
                    </div>
                </a>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" style="margin-left: auto;" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-center nav-main">
                <li class="nav-item">
                    <a class="nav-link" href="/rivista">Rivista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.category', '1') }}">Cultura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.category', '2') }}">Economia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.category', '3') }}">Enogastronomia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.category', '4') }}">Musica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.category', '5') }}">Storia di Treviso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.category', '6') }}">Benessere</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('news.category', '7') }}">Sport</a>
                </li>
            </ul>
        </div>
    </nav>

</div>
