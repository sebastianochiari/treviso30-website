@extends('main')

@section('stylesheets')

<!-- Style CSS -->
<link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('title', "- $mainPost->title")

@section('content')
<div class="row mt-3">

    <!-- AREA CHE CONTIENE IL POST -->
    <div class="col-md-8">
        <div class="blog-post m-2">
            @if(!empty($mainPost->image))
                <!-- IMMAGINE -->
                <div class="img-container mb-2">
                    <img src="{{ asset('images/' . $mainPost->image) }}" class="post-img">
                    <div class="bottom-left post-categoria" style="background-color: #{{ $mainPost->category->color }} !important">{{ $mainPost->category->name }}</div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-4 offset-md-8 box-shadow post-categoria text-align-center" style="background-color: #{{ $mainPost->category->color }}">{{ $mainPost->category->name }}</div>
                </div>
            @endif
            <!-- TITOLO -->
            <h3 class="post-titolo mt-3 mb-3">
                {{ $mainPost->title }}
            </h3>
            <!-- CATEGORIA + DATA -->
            <div class="post-meta">
                <div class="post-data">
                    <p>{{ date('j F Y', strtotime($mainPost->created_at)) }} di Giampaolo Zorzo</p>
                </div>
            </div>

            <!-- CORPO del POST -->
            <div class="post-corpo mt-3 mb-3">
                {!! $mainPost->body !!}
            </div>
            <!-- BANNER CONDIVISIONE -->
            <div class="post-condivisione mt-5 pt-4 pb-4">
            </div>
            <!-- POST PRECEDENTE - POST SUCCESSIVO -->
            <div class="row mt-5 pt-5 mb-5 pb-5 post-prevsucc">
                <div class="col-md-5 text-left">
                    @if(!blank($prevPost))
                    <div>
                        <i class="fas fa-arrow-left mr-2"></i>
                        POST PREC
                    </div>
                    <div class="mt-3">
                        <h5>
                            <a class="text-dark" href="{{ route('news.single', $prevPost->slug) }}">
                                {{ $prevPost->title }}
                            </a>
                        </h5>
                    </div>
                    @endif
                </div>
                <div class="col-md-2">
                    <!-- separatore di servizio -->
                </div>
                <div class="col-md-5 text-right">
                    @if(!blank($nextPost))
                    <div>
                        POST SUCC
                        <i class="fas fa-arrow-right ml-2"></i>
                    </div>
                    <div class="mt-3">
                        <h5>
                            <a class="text-dark" href="{{ route('news.single', $nextPost->slug) }}">
                                {{ $nextPost->title }}
                            </a>
                        </h5>
                    </div>
                    @endif
                </div>
            </div>
            <!-- RELATED POSTS -->
            <div class="related-posts">
                @if(!$correlatedPosts->isEmpty())
                    <h5 class="post-lateralbanner-postrecenti">POTREBBE INTERESSARTI</h5>
                    <div class="row mt-4">
                        @foreach ($correlatedPosts as $post)
                        <div class="col-md-4">
                            <a class="text-dark" href="{{ route('news.single', $post->slug) }}">
                                <img class="w-100" src="{{ url('/images/example-img.jpg') }}" alt="Card image cap">
                                <h5 class="mt-2">
                                    {{ $post->title }}
                                </h5>
                            </a>
                        </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- AREA CHE CONTIENE I RECENTI -->
    <div class="col-md-4">
        <div class="sticky-top pt-5">
            <h5 class="post-lateralbanner-postrecenti">POST RECENTI</h5>

            @foreach ($recentPosts as $post)
            <div class="recent-card">
                <div class="box-shadow post-categoria" style="background-color: #{{ $post->category->color }}">{{ $post->category->name }}</div>
                <h5 class="mt-1">
                    <a class="text-dark" href="{{ route('news.single', $post->slug) }}">{{ $post->title }}</a>
                </h5>
                <p class="recent-card-text">{{ date('j M Y', strtotime($post->created_at)) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
