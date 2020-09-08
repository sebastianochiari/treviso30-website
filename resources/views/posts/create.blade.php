@extends('dashboard')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}
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
        Crea un nuovo post
    </h4>

    <hr>

    <div class="row">
        <div class="col-md-8">

            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
                {{ Form::label('title', 'Titolo:') }}
                <!-- null è il default value -->
                {{ Form::text('title', null, array('class' => 'form-control mb-4', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, array('class' => 'form-control mb-4', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

                {{ Form::label('author', 'Autore:') }}
                {{ Form::text('author', "$user->name", array('class' => 'form-control mb-4', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('category_id', 'Categoria:')}}
                <select class="form-control mb-4" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('featured_image', "Carica l'immagine:") }}
                {{ Form::file('featured_image', array('class' => 'form-control-file')) }}
                <small id="featured_image" class="form-text text-muted mb-4">È sempre consigliabile caricare un'immagine insieme al post.</small>

                {{ Form::label('body', 'Corpo:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control mb-4')) }}

                {{ Form::submit('Crea il post', array('class' => 'btn btn-success mt-4')) }}

            {!! Form::close() !!}

        </div>
    </div>

</div>

@endsection

@section('scripts')

{!! Html::script('js/parsley.js') !!}
{!! Html::script('js/dashboard.js') !!}

@endsection
