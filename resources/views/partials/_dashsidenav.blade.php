<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3 pl-2">

        <div class="px-3 mt-2">
            <h4>
                Ciao,
                <br>
                {{ Auth::user()->name }}
            </h4>
        </div>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Area redazione</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('posts/create') ? "active" : "" }}" href="{{ route('posts.create') }}">
                    <span><i class="fas fa-file-upload mr-2"></i></span>
                    Nuovo post<span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('posts') ? "active" : "" }}" href="{{ route('posts.index') }}">
                    <span><i class="fas fa-clipboard-list mr-2"></i></span>
                    Gestisci post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('riviste/create') ? "active" : "" }}" href="{{ route('riviste.create') }}">
                    <span><i class="far fa-file-alt mr-2"></i></span>
                    Aggiungi rivista
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('riviste') ? "active" : "" }}" href="{{ route('riviste.index') }}">
                    <span><i class="far fa-copy mr-2"></i></span>
                    Gestisci riviste
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>area amministrativa</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span><i class="fas fa-user mr-2"></i></span>
                    Gestisci utenti
                </a>
            </li>
        </ul>
    </div>
</nav>
