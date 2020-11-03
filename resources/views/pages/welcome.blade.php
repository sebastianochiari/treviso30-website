@extends('main')

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('title', '- Informazione di Marca')

@section('content')

    <div class="jumbotron p-3 p-md-5 text-white no-border banner-rivista mb-5">
        <div class="col-md-6 px-0 mt-4">
            <h1 class="display-4" style="font-weight: bolder;">L'ultimo numero della rivista è online</h1>
            @if(is_object($latestRivista))
                <p class="my-3"><a class="text-white rivista-link" style="font-weight: 900;" href="{{ asset('magazine\pdf/' . $latestRivista->pdf_file) }}" target="_blank">Scarica</a> la rivista in formato PDF e rimani mensilmente aggiornato con Treviso30News sulla Marca Trevigiana</p>
            @else
                <p class="my-3"><a class="text-white rivista-link" style="font-weight: 900;" href="" target="_blank">Scarica</a> la rivista in formato PDF e rimani mensilmente aggiornato con Treviso30News sulla Marca Trevigiana</p>
            @endif
        </div>
    </div>

    <!-- LATEST POSTS -->
    <p class="section-title">
        <span>Ultimi articoli</span>
    </p>
    @foreach ($latestPosts as $post)
        <div class="row pt-4">
            <div class="col-md-4">
                <a href="{{ route('news.single', $post->slug) }}">
                    <img src="{{ asset('images/' . $post->image) }}" alt="" class="banner-img">
                </a>
            </div>
            <div class="col-md-8" id="recentPost">
                <p class="meta mt-2">
                    <a href="{{ route('news.category', $post->category->id) }}" class="py-1 px-2 mr-3" style="background-color: #{{ $post->category->color }} !important">{{ $post->category->name }}</a>{{ date('j M', strtotime($post->created_at)) }}
                </p>
                <h4 class="article-title">
                    <a class="text-dark" href="{{ route('news.single', $post->slug) }}">{{ $post->title }}</a>
                </h4>
                <p class="article-abstract">
                    {{ substr(strip_tags($post->body), 0, 150) }}{{ strlen(strip_tags($post->body)) > 150 ? "..." : "" }}
                </p>
            </div>
        </div>
        <hr class="mb-4">
    @endforeach

    <!-- RECENT per CATEGORIA -->
    <div class="row mt-5">
        <div class="col-md-8 blog-main">

            @foreach ($categories as $category)
                <p class="recent-section-title">
                    <a href="{{ route('news.category', $category->id) }}">
                        <span style="background-color: #{{ $category->color }} !important">{{ $category->name }}</span>
                    </a>
                </p>
                @foreach ($recentPosts as $post)
                    @if ($category->id == $post->category_id)
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <a href="{{ route('news.single', $post->slug) }}">
                                    <img src="{{ asset('images/' . $post->image) }}" class="recent-category-img">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <h5 class="article-title">
                                    <a class="text-dark" href="{{ route('news.single', $post->slug) }}">{{ $post->title }}</a>
                                </h5>
                                <p class="article-abstract">
                                    <time class="meta">
                                        {{ date('j M', strtotime($post->created_at)) }}
                                    </time>
                                    - {{ substr(strip_tags($post->body), 0, 150) }}{{ strlen(strip_tags($post->body)) > 150 ? "..." : "" }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3">
                <h4 class="font-italic">Sponsors</h4>
                <div class="sponsor-list">
                    @foreach($sponsors as $sponsor)
                        <a href="{{ $sponsor->link }}" target="_blank">
                            <img src="{{ asset('images/sponsor/' . $sponsor->image) }}" alt="{{ $sponsor->name }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

@endsection
