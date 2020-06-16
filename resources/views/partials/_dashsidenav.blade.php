<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3 pl-2">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Area redazione</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('posts/create') ? "active" : "" }}" href="{{ route('posts.create') }}">
                    <span><i class="fas fa-file-upload mr-1"></i></span>
                    Nuovo post<span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span><i class="far fa-clipboard mr-1"></i></span>
                    I miei post
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>area amministrativa</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('posts') ? "active" : "" }}" href="{{ route('posts.index') }}">
                    <span><i class="fas fa-clipboard-list mr-1"></i></span>
                    Gestisci post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span><i class="far fa-file-alt mr-1"></i></span>
                    Aggiungi rivista
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span><i class="far fa-copy mr-1"></i></span>
                    Gestisci riviste
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span><i class="fas fa-user mr-1"></i></span>
                    Gestisci utenti
                </a>
            </li>
        </ul>
    </div>
</nav>