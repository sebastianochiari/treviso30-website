@extends('main')

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('title', '- Informazione di Marca')

@section('content')

<div class="jumbotron p-3 p-md-5 text-white no-border banner-rivista">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">L'ultimo numero della rivista è online</h1>
        <p class="lead my-3">Scarica la rivista in formato PDF e rimani mensilmente aggiornato con Treviso30News sulla Marca Trevigiana</p>
        <button type="button" class="btn btn-light">Scarica il PDF</button>
    </div>
</div>

<!-- LATEST POSTS -->
<div class="latest-posts">

</div>

<div class="row mb-2">
    @foreach ($posts as $post)
        <div class="col-md-6 p-3">
            <div class="card no-border box-shadow h-100">
                <div class="card-img-top img-container mb-2">
                    <img src="images/example-img.jpg" alt="" class="post-img">
                    <div class="bottom-left post-categoria">SPORT</div>
                </div>
                <div class="card-body">
                    <h3 class="mb-0">
                        <a class="text-dark" href="{{ route('news.single', $post->slug) }}">{{ $post->title }}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{ date('j M Y', strtotime($post->created_at)) }}</div>
                    <p class="card-text mb-auto">{{ substr($post->body, 0, 150) }}{{ strlen($post->body) > 150 ? "..." : "" }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="row mt-5">
    <div class="col-md-8 blog-main">

        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Cultura
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <img class="w-100" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                        <h5>In falesia e in montagna, diversi tipi di arrampicata</h5>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Economia
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                        <h5>In falesia e in montagna, diversi tipi di arrampicata</h5>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Enogastronomia
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                        <h5>In falesia e in montagna, diversi tipi di arrampicata</h5>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Musica
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                        <h5>In falesia e in montagna, diversi tipi di arrampicata</h5>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
        </div>


        <h3 class="pb-3 mb-4 font-italic border-bottom">
            Sport
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                        <h5>In falesia e in montagna, diversi tipi di arrampicata</h5>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                        <p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-card splitscreen" href="">
                    <div class="left-1">
                        <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                    </div>
                    <div class="right-2 recent-card-side-text">
                        <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                        <p class="recent-card-text">Gennaio 1, 2014</p>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3">
            <h4 class="font-italic">Sponsors</h4>
            <div class="sponsor-list">
                <a href="#">
                    <img src="images/sponsor/astoria.png" alt="Astoria Wines">
                </a>
                <a href="#">
                    <img src="images/sponsor/biancoeceleste.jpg" alt="Bianco e Celeste">
                </a>
                <a href="#">
                    <img src="images/sponsor/bibanesi.png" alt="Bibanesi">
                </a>
                <a href="#">
                    <img src="images/sponsor/commauto.png" alt="Commauto">
                </a>
                <a href="#">
                    <img src="images/sponsor/dapino.png" alt="Da Pino Pizzeria">
                </a>
                <a href="#">
                    <img src="images/sponsor/falcon.jpg" alt="Falcon">
                </a>
                <a href="#">
                    <img src="images/sponsor/lagunapalacehotel.png" alt="Laguna Palace Hotel">
                </a>
                <a href="#">
                    <img src="images/sponsor/lenzini.png" alt="Lenzini">
                </a>
                <a href="#">
                    <img src="images/sponsor/logo-radime.png" alt="Ra.Di.Me.">
                </a>
                <a href="#">
                    <img src="images/sponsor/pizzeriasantalucia.jpg" alt="Pizzeria Santa Lucia">
                </a>
            </div>
        </div>
    </aside><!-- /.blog-sidebar -->

</div><!-- /.row -->

@endsection
