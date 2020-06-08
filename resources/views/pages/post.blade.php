<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/782fba089f.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Post page</title>
</head>

<body>

    <div class="container">

        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col">
                    <a href="#">
                        <img class="blog-logo" src="images/logo.jpg" alt="logo">
                    </a>
                </div>
                <div class="col">
                    <!-- INSERIRE BANNER PUBBLICITARIO -->
                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar-light mb-2">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">

                <li class="nav-item">
                  <a class="nav-link special-menu-item" href="#">la rivista</a>
                </li>

                <li class="nav-item dropdown">
                    <!-- deve portare a tutte le news -->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        notizie
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Attualità</a>
                        <a class="dropdown-item" href="#">Politica</a>
                        <a class="dropdown-item" href="#">Economia</a>
                        <a class="dropdown-item" href="#">Sport</a>
                        <a class="dropdown-item" href="#">Cultura</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">archivio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">contatti</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">la redazione</a>
                </li>

                <li class="nav-item dropdown">
                    <!-- deve portare a tutte le news -->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        more
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">area riservata</a>
                    </div>
                </li>

              </ul>
            </div>
        </nav>

        <main>

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
                                <p>Gennaio 1, 2014 di <a href="#">Mark</a></p>
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
                        <div class="card-deck">
                          <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                          <div class="card">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <!-- AREA CHE CONTIENE I CORRELATI -->
                <div class="col-md-4">
                    <div class="sticky-top pt-5">
                        <h5 class="post-lateralbanner-postrecenti">POST RECENTI</h5>
                    </div>
                </div>

            </div>

        </main>

        <footer class="mt-5 pb-5" id="footer">
            <div class="container">
                <div id="footer-social" class="footer-blog">
                    <p class="pt-4 align-center">Seguici su:</p>
                    <ul class="footer-social mt-3">
                        <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="footer-navbar">
                    <div class="navbar navbar-expand-lg navbar-light">
                        <ul class="navbar-nav align-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#">privacy(?)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">terms(?)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">chi siamo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">contatti</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">area riservata</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-legal mt-3">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            Reg. Tribunale di Treviso n. 264 procedimento n° 6476/18
                            <br>
                            Iscrizione al ROC (registro operatori di comunicazione) n. 323647
                        </div>
                        <div class="col-md-6 text-right">
                            © Treviso30News - Tutti i diritti sono riservati
                            <br>
                            Realizzato da <a href="https://www.sebastianochiari.com" target="_blank">Sebastiano Chiari</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>

  </html>
