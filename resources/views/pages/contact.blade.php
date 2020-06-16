@extends('main')

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('title', '- Contattaci')

@section('content')

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

@endsection
