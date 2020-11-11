@extends('main')

@section('title', 'Rivista - Treviso30News')

@section('metadata')

    Scarica la rivista in formato PDF e rimani mensilmente aggiornato con Treviso 30 News sulla Marca Trevigiana.

@endsection

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('content')

    <!-- NOME CATEGORIA -->
    <h1 class="text-align-center my-5">
        Riviste
    </h1>

    <hr>

    <div class="row mt-3">
        @foreach ($riviste as $rivista)
            <div class="col-md-4">
                <img src="{{ asset('magazine/img/' . $rivista->preview_img) }}" class="category-img p-2">
                <p class="meta mt-3 text-align-center" style="margin-bottom: 1rem;">
                    {{ date('F Y', strtotime($rivista->date)) }}
                </p>
                <h5 class="article-title text-align-center">
                    <a class="text-dark" href="{{ asset('magazine\pdf/' . $rivista->pdf_file) }}" target="_blank">{{ $rivista->name }}</a>
                </h5>
            </div>
        @endforeach
        {!! $riviste->links(); !!}
    </div>

    <p class="meta mt-3 text-align-center">
        torna a
        <a href="/">
            <b>HOME</b>
        </a>
    </p>

@endsection
