@extends('main')

@section('stylesheets')

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">

@endsection

@section('title', "- $mainPost->title")

@section('content')
    <div class="row mt-3">

        <!-- AREA CHE CONTIENE IL POST -->
        <div class="col-md-8 offset-md-2">
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
                <div class="post-meta pt-2">
                    <div class="post-data">
                        <p class="meta">{{ date('j F Y', strtotime($mainPost->created_at)) }} | <b>{{ $mainPost->author }}</b></p>
                    </div>
                </div>
                <!-- CORPO del POST -->
                <div id="post" class="post-corpo mt-3 mb-5 pt-3 pb-5">
                    {!! $mainPost->body !!}
                </div>
                <div class="my-5">
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox"></div>
                </div>
                <!-- RELATED POSTS -->
                <div class="related-posts mt-5">
                    @if(!$recentPosts->isEmpty())
                        <p class="recent-section-title">
                            <a>
                                <span class="text-black">LEGGI ANCHE</span>
                            </a>
                        </p>
                        <div class="row mt-4">
                            @foreach ($recentPosts as $post)
                                <div class="col-md-4">
                                    <a class="text-dark" href="{{ route('news.single', $post->slug) }}">
                                        <img class="w-100" src="{{ asset('images/' . $post->image) }}">
                                        <p class="meta mt-3" style="margin-bottom: 1rem;">
                                            <a href="{{ route('news.category', $post->category->id) }}">{{ $post->category->name }}</a> - <b>{{ date('j M', strtotime($post->created_at)) }}</b>
                                        </p>
                                        <h6 class="article-title">
                                            <a class="text-dark" href="{{ route('news.single', $post->slug) }}">{{ $post->title }}</a>
                                        </h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <hr>
                <div class="mt-5" id="creative-commons">
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/" target="_blank">
                        <img alt="Licenza Creative Commons" lazy-img="https://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" src="https://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" class="loaded" width="88" height="31">
                    </a>
                    <br>
                    This opera is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/" target="_blank">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License</a>.
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f69fc0f8b51b838"></script>

@endsection
