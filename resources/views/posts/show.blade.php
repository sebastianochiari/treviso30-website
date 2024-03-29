@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

    <div class="mt-4">

        <h4>
            Post overview
        </h4>

        <hr>

        <div class="row mt-4">
            <div class="col-md-8">

                <h3>{{ $post->title }}</h3>

                <!-- we are executing directly from the DB -->
                <p class="lead">{!! $post->body !!}</p>

            </div>

            <div class="col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <p><b>Immagine:</b></p>
                        @if(!empty($post->image))
                            <img src="{{ asset('images/' . $post->image) }}" class="w-100" />
                        @else
                            <small>Non è stata caricata nessuna immagine per l'articolo.</small>
                        @endif
                        <p class="mt-3"><b>URL:</b> <a href="{{ route('news.single', $post->slug) }}">{{ route('news.single', $post->slug) }}</a></p>
                        <p><b>Categoria:</b> {{ $post->category->name }} </p>
                        <p><b>Autore:</b> {{ $post->author }} </p>
                        <p><b>Creato:</b> {{ date('j M Y H:i', strtotime($post->created_at)) }} </p>
                        <p><b>Ultimo aggiornamento:</b> {{ date('j M Y H:i', strtotime($post->updated_at)) }} </p>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                {!! Html::linkRoute('posts.edit', 'Modifica', array($post->id), array('class' => 'btn btn-primary btn-block m-2')) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                {{ Form::submit('Elimina', ['class' => 'btn btn-danger btn-block m-2 confirm-box']) }}
                                {!! Form::close() !!}
                            </div>
                            <div class="col-md-4">
                                {{ Html::linkRoute('posts.index', 'Indietro', array(), ['class' => 'btn btn-secondary btn-block m-2' ]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.js') !!}
    {!! Html::script('js/dashboard.js') !!}

@endsection
