@extends('main')

@section('title', '- esempio di post')

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('content')
            <div class="row mt-3">

                <!-- AREA CHE CONTIENE IL POST -->
                <div class="col-md-8">
                    <div class="blog-post m-2">
                        <!-- IMMAGINE -->
                        <div class="img-container mb-2">
                            <img src="images/example-img.jpg" alt="" class="post-img">
                            <div class="bottom-left post-categoria">SPORT</div>
                        </div>
                        <!-- TITOLO -->
                        <h3 class="post-titolo mt-3 mb-3">
                            In falesia e in montagna, diversi tipi di arrampicata
                        </h3>
                        <!-- CATEGORIA + DATA -->
                        <div class="post-meta">
                            <div class="post-data">
                                <p>Gennaio 1, 2014 di Giampaolo Zorzo</p>
                            </div>
                        </div>
                        <!-- CORPO del POST -->
                        <div class="post-corpo mt-3 mb-3">
                            <p>
                                L’arrampicata oggi non è più uno sport d’élite e nemmeno sconosciuto. Capita sempre più spesso nei centri commerciali, persino nei fast food, di vedere strutture dotate di prese artificiali per invogliare i bambini a giocare ad arrampicarsi, e anche le palestre urbane sono sempre più grandi e frequentate. Dall’indoor alla falesia il passo non è lungo, o almeno è più breve che verso la montagna, dove arrampicare implica la padronanza di un ambiente severo e pericoloso quanto più affascinante. Che differenza passa tra la palestra di roccia e l’arrampicata in ambiente alpino? In che senso possiamo definirli diversi tipi di arrampicata? Lo abbiamo chiesto a Pietro Dal Pra, fortissimo scalatore, Guida alpina e ambassador La Sportiva.
                            </p>
                            <p>
                                “Dall’arrampicare in falesia all’arrampicata in montagna cambia tutto. L’arrampicata in falesia è un’arrampicata sportiva in cui si eliminano i pericoli legati al terreno verticale per concentrarsi sul raggiungimento della difficoltà pura o mantenendola come attività sportiva e ludica. In falesia tutti gli itinerari sono pre-attrezzati e le condizioni meteorologiche non hanno un’importanza fondamentale in termini di rischio. In montagna si pratica un’arrampicata più alpinistica, gli itinerari non sono pre-attrezzati e sempre semplici da seguire.
                            </p>
                        </div>
                        <!-- BANNER CONDIVISIONE -->
                        <div class="post-condivisione mt-5 pt-4 pb-4">
                        </div>
                        <!-- POST PRECEDENTE - POST SUCCESSIVO -->
                        <div class="row mt-5 pt-5 mb-5 pb-5 post-prevsucc">
                            <div class="col-md-5 text-left">
                                <div>
                                    <i class="fas fa-arrow-left mr-2"></i>
                                    POST PREC
                                </div>
                                <div class="mt-3">
                                    <a href="#">
                                        Questo porta all'articolo precedente (titolo articolo)
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <!-- separatore di servizio -->
                            </div>
                            <div class="col-md-5 text-right">
                                <div>
                                    POST SUCC
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </div>
                                <div class="mt-3">
                                    <a href="#">
                                        Questo porta all'articolo successivo (titolo articolo)
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- RELATED POSTS -->
                        <div class="related-posts">
                            <h5 class="post-lateralbanner-postrecenti">POTREBBE INTERESSARTI</h5>
                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <img class="w-100" src="images/example-img.jpg" alt="Card image cap">
                                    <h6 class="mt-2">In falesia e in montagna, diversi tipi di arrampicata</h6>
                                    <p class="recent-card-text">Gennaio 1, 2014</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="w-100" src="images/example-img.jpg" alt="Card image cap">
                                    <h6 class="mt-2">In falesia e in montagna, diversi tipi di arrampicata</h6>
                                    <p class="recent-card-text">Gennaio 1, 2014</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="w-100" src="images/example-img.jpg" alt="Card image cap">
                                    <h6 class="mt-2">In falesia e in montagna, diversi tipi di arrampicata</h6>
                                    <p class="recent-card-text">Gennaio 1, 2014</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AREA CHE CONTIENE I CORRELATI -->
                <div class="col-md-4">
                    <div class="sticky-top pt-5">
                        <h5 class="post-lateralbanner-postrecenti">POST RECENTI</h5>
                        <div class="recent-card img-container">
                            <img class="post-img" src="images/example-img.jpg" alt="">
                            <div class="bottom-center align-center">
                                <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                                <p class="recent-card-text">Gennaio 1, 2014</p>
                            </div>
                        </div>
                        <div class="recent-card splitscreen" href="">
                            <div class="left-1">
                                <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                            </div>
                            <div class="right-2 recent-card-side-text">
                                <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                                <p class="recent-card-text">Gennaio 1, 2014</p>
                            </div>
                        </div>
                        <div class="recent-card splitscreen">
                            <div class="left-1">
                                <img class="recent-card-side-image" src="images/example-img.jpg" alt="Card image cap">
                            </div>
                            <div class="right-2 recent-card-side-text">
                                <h6>In falesia e in montagna, diversi tipi di arrampicata</h6>
                                <p class="recent-card-text">Gennaio 1, 2014</p>
                            </div>
                        </div>
                        <div class="recent-card splitscreen">
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

            </div>

@endsection
