<!DOCTYPE html>
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

    <title>Hello, world!</title>
</head>

<body>

    <div id="header" class="container">

        <header class="blog-header py-3">
            <div class="flex-nowrap justify-content-between align-items-center">
                <div class="text-center">
                    <a class="blog-header-logo text-dark" href="#">
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
                        <a class="nav-link" href="#">Rivista</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cultura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Economia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enogastronomia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Musica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sport</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <main role="main" class="container">

        <h4>Contattaci</h4>

        <div class="mt-4">
            <h6>Redazione</h6>
            <p>
                Viale della Repubblica, 194/a, 31100, Treviso (TV)
                <br>
                treviso.trenta@libero.it
                <br>
                +39 334 1119261
            </p>
        </div>

        <div class="mt-4">
            <h6>Pubblicità</h6>
            <p>
                Alberto Geromel
                <br>
                alberto.trevisonews@gmail.com
                <br>
                +39 370 7041373
            </p>
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
