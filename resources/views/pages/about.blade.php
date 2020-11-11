@extends('main')

@section('title', 'Chi siamo - Treviso30News')

@section('metadata')

    Scopri chi siamo, la mission di Treviso30News e tutta la redazione che lavora alla pubblicazione del mensile sulla Marca Trevigiana.

@endsection

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('content')

    <div class="row">
        <div id="chi-siamo" class="col-md-8">
            <h4 class="mb-4">Chi siamo</h4>
            <p>
                <b>Treviso30News</b> è, come si evince dal nome, un mensile che vuole essere un contenitore di notizie legate alla Marca Trevigiana, affrontando temi che fanno parte della vita quotidiana di un territorio, ovvero salute, arte, cucina, enogastronomia, spettacoli, politica, cultura, sport, appuntamenti e molti altri argomenti.
            </p>
            <p>
                A cadenza mensile, la rivista di 84 pagine, tutte a colori e su carta patinata, opaca di gr. 115 viene distribuita, gratuitamente, presso molte edicole del centro, studi professionali, locali pubblici, strutture sportive, ricettive e durante alcuni convegni e congressi oltre, naturalmente, al Palaverde durante le partite casalinghe della De Longhi basket, dell'Imoco volley, a Monigo in occasione delle gare del rugby Benetton, Longarone Fiere, e in circa 220 centri di distribuzione.
            </p>
            <p>
                La tiratura, è di 5.000 copie e, ovviamente, i 220 punti di distribuzione vengono riforniti due/tre volte della rivista nell'arco del mese. Treviso30News è presente anche su Instagram e Facebook.
            </p>
        </div>
        <div class="col-md-4">
            @for($i = 0; $i < count($redazione); $i++)
                @if($i == 0)
                    <div class="redazione-card">
                        <p class="redazione-posizione">direttore responsabile</p>
                        <h5><a class="text-black" href="{{ route('pages.redazione', $redazione[$i]->id) }}">{{ $redazione[$i]->name }}</a></h5>
                    </div>
                @elseif($i == 1)
                    <div class="redazione-card">
                        <p class="redazione-posizione">caporedattore</p>
                        <h5><a class="text-black" href="{{ route('pages.redazione', $redazione[$i]->id) }}">{{ $redazione[$i]->name }}</a></h5>
                    </div>
                @elseif($i == 2)
                    <div class="redazione-card">
                        <p class="redazione-posizione">collaboratori</p>
                        <div class="redazione-multipli">
                            <h5><a class="text-black" href="{{ route('pages.redazione', $redazione[$i]->id) }}">{{ $redazione[$i]->name }}</a></h5>
                        </div>
                        @else
                            <div class="redazione-multipli">
                                <h5><a class="text-black" href="{{ route('pages.redazione', $redazione[$i]->id) }}">{{ $redazione[$i]->name }}</a></h5>
                            </div>
                        @endif
                        @if ($i == (count($redazione)-1))
                    </div>
                @endif
            @endfor
            <div class="redazione-card">
                <p class="redazione-posizione">pubblicità</p>
                <h5>Federico De Marchi</h5>
            </div>
            <div class="redazione-card">
                <p class="redazione-posizione">ideazione e progetto grafico</p>
                <h5>INK IMAGE</h5>
                <a class="text-black" href="mailto: grafica@inkimage.it">grafica@inkimage.it</a>
            </div>
            <div class="redazione-card">
                <p class="redazione-posizione">grafica e impaginazione</p>
                <h5>Elena Pasetto</h5>
            </div>
            <div class="redazione-card">
                <p class="redazione-posizione">stampatore</p>
                <h5>Imoco - Villorba</h5>
            </div>
            <div class="redazione-card">
                <p class="redazione-posizione">fotografia</p>
                <div class="redazione-multipli">
                    <h5>FOTOFILM di Nicola Mattiuzzo</h5>
                </div>
                <div class="redazione-multipli">
                    <h5>Antonio Arcoraci</h5>
                </div>
                <div class="redazione-multipli">
                    <h5>Alberto Paccagnella</h5>
                </div>
            </div>
            <div class="redazione-card">
                <p class="redazione-posizione">editore</p>
                <h5>B-Z press s.r.l.s.</h5>
            </div>
        </div>
    </div>

@endsection
