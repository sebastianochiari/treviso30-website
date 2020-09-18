@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

    <div class="mt-4">

        <h4>
            Aggiungi una rivista
        </h4>

        <hr>

        <div class="row">
            <div class="col-md-8">

                {!! Form::open(array('route' => 'riviste.store', 'data-parsley-validate' => '', 'files' => true)) !!}

                {{ Form::label('name', 'Titolo rivista:') }}
                {{ Form::text('name', null, array('class' => 'form-control mb-4', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('date', 'Inserire data:') }}
                {{ Form::date('date', \Carbon\Carbon::now(), array('class' => 'form-control w-50', 'required' => '')) }}
                <small id="date" class="form-text text-muted mb-4">Non è importante il giorno, conta il mese e l'anno.</small>

                {{ Form::label('preview_img', 'Immagine di copertina:') }}
                {{ Form::file('preview_img', array('class' => 'form-control-file')) }}
                <small id="preview_img" class="form-text text-muted mb-4">Caricare l'immagine di copertina della rivista in formato JPG/JPEG/PNG.</small>

                {{ Form::label('pdf_file', 'PDF rivista:') }}
                {{ Form::file('pdf_file', array('class' => 'form-control-file')) }}
                <small id="pdf_file" class="form-text text-muted mb-4">Caricare il PDF della rivista.</small>

                {{ Form::submit('Aggiungi la rivista', array('class' => 'btn btn-success mt-4')) }}

                {!! Form::close() !!}

            </div>
        </div>

    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.js') !!}
    {!! Html::script('js/dashboard.js') !!}

@endsection
