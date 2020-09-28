@extends('main')

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('title', '- Chi siamo')

@section('content')

    <div class="">
        <h3 class="mb-4">{{ $redazione->name }}</h3>
        <div class="row">
            @if(is_null($redazione->image))
            @else
                <div class="col-md-6">
                    <img style="width: 100%;" src="{{ asset('images/redazione/' . $redazione->image) }}">
                </div>
            @endif
            <div class="col-md-6">
                <div class="post-corpo">{!! $redazione->description !!}</div>
            </div>
        </div>

        <p class="meta mt-5 text-align-center">
            torna alla
            <a href="/about">
                <b>REDAZIONE</b>
            </a>
        </p>
    </div>

@endsection
