@extends('main')

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('title', "- $category->name")

@section('content')

    <!-- NOME CATEGORIA -->
    <h1 class="text-align-center my-5">
        {{ $category->name }}
    </h1>

    <hr>

    @if(!$categoryPosts->isEmpty())
        <div class="row mt-3">
            <!-- GRIGLIA CON GLI ULTIMI 12 POST RECENTI della seguente categoria -->
            @foreach ($categoryPosts as $post)
                <div class="col-md-4 p-2">
                    <a href="{{ route('news.single', $post->slug) }}">
                        <img src="{{ asset('images/' . $post->image) }}" class="category-img">
                    </a>
                    <p class="meta mt-3" style="margin-bottom: 1rem;">
                        <a href="{{ route('news.category', $post->category->id) }}">{{ $post->category->name }}</a> - <b>{{ date('j M', strtotime($post->created_at)) }}</b>
                    </p>
                    <h6 class="article-title">
                        <a class="text-dark" href="{{ route('news.single', $post->slug) }}">{{ $post->title }}</a>
                    </h6>
                    <p class="article-abstract">
                        {{ substr(strip_tags($post->body), 0, 75) }}{{ strlen(strip_tags($post->body)) > 75 ? "..." : "" }}
                    </p>
                </div>
            @endforeach
            {!! $categoryPosts->links(); !!}
        </div>

    @else
        <p class="text-align-center my-5">
            Non ci sono articoli da visualizzare.
        </p>
    @endif

    <p class="meta mt-3 text-align-center">
        torna a
        <a href="/">
            <b>HOME</b>
        </a>
    </p>

@endsection
