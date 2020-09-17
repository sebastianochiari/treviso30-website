@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

    <div class="mt-4">

        <h4>
            Aggiungi uno sponsor
        </h4>

        <hr>

        <div class="row">
            <div class="col-md-8">

                {!! Form::open(array('route' => 'admin.sponsors.store', 'data-parsley-validate' => '', 'files' => true)) !!}

                {{ Form::label('name', 'Nome sponsor:') }}
                {{ Form::text('name', null, array('class' => 'form-control mb-4', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('link', 'Inserire link sponsor:') }}
                {{ Form::text('link', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                <small id="link" class="form-text text-muted mb-4">Inserire il link completo (compreso di prefisso http)</small>

                {{ Form::label('image', 'Immagine sponsor:') }}
                {{ Form::file('image', array('class' => 'form-control-file', 'required' => '')) }}
                <small id="image" class="form-text text-muted mb-4">Caricare l'immagine dello sponsor in formato JPG/JPEG/PNG</small>

                {{ Form::submit('Aggiungi lo sponsor', array('class' => 'btn btn-success mt-4')) }}

                {!! Form::close() !!}

            </div>
        </div>

    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.js') !!}
    {!! Html::script('js/dashboard.js') !!}

@endsection
