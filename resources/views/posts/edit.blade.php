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
        Modifica il post
    </h4>

    <hr>

    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}

    <div class="row mt-4">
        <div class="col-md-8">
            {{ Form::label('title', 'Titolo:') }}
            {{ Form::text('title', null, ['class' => 'form-control mb-2']) }}

            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug', null, array('class' => 'form-control mb-2', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

            {{ Form::label('category_id', 'Categoria:') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control mb-2']) }}

            {{ Form::label('body', 'Corpo:') }}
            {{ Form::textarea('body', null, ['class' => 'form-control mb-2']) }}
        </div>

        <div class="col-md-4">
            <div class="card bg-light align-center">
                <div class="card-body">
                    <p><b>Creato:</b> {{ date('j M Y H:i', strtotime($post->created_at)) }} </p>
                    <p><b>Ultimo aggiornamento:</b> {{ date('j M Y H:i', strtotime($post->updated_at)) }} </p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            {!! Html::linkRoute('posts.show', 'Annulla', array($post->id), array('class' => 'btn btn-danger btn-block m-2')) !!}
                        </div>
                        <div class="col-md-6">
                            {{ Form::submit('Salva', ['class' => 'btn btn-success btn-block m-2']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end of the row -->

    {!! Form::close() !!}

</div>

@endsection

@section('scripts')

{!! Html::script('js/dashboard.js') !!}

@endsection
