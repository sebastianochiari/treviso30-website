@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/dashboard.css') !!}

    <script src="https://cdn.tiny.cloud/1/9mds49kzhgjojhu80yfyuhh66zbho0u170z2qafw370he1ny/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link lists',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | numlist bullist',
            menubar: false
        });
    </script>

@endsection

@section('content')

    <div class="mt-4">

        <h4>
            Modifica il membro della redazione
        </h4>

        <hr>

        <div class="row">
            <div class="col-md-8">

            {!! Form::model($single, ['route' => ['admin.redazione.update', $single->id], 'method' => 'put', 'files' => true]) !!}

                {{ Form::label('name', 'Nome:') }}
                <!-- null è il default value -->
                {{ Form::text('name', null, array('class' => 'form-control mb-4', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('description', 'Descrizione:') }}
                {{ Form::textarea('description', null, array('class' => 'form-control mb-4', 'required' => '')) }}

                {{ Form::label('image', "Carica l'immagine:") }}
                {{ Form::file('image', array('class' => 'form-control-file')) }}
                <small id="featured_image" class="form-text text-muted mb-4">È preferibile una foto in formato verticale.</small>

                {{ Form::submit('Modifica membro', array('class' => 'btn btn-success mt-4')) }}

                {!! Form::close() !!}

            </div>
        </div>

    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.js') !!}
    {!! Html::script('js/dashboard.js') !!}

@endsection
