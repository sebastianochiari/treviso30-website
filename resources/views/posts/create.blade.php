@extends('dashboard')

@section('stylesheets')

{!! Html::style('css/parsley.css') !!}
{!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

<div class="mt-4">

    <h4>
        Crea un nuovo post
    </h4>

    <hr>

    {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
    {{ Form::label('title', 'Titolo:') }}
    <!-- null è il default value -->
    {{ Form::text('title', null, array('class' => 'form-control mb-2', 'required' => '', 'maxlength' => '255')) }}

    {{ Form::label('slug', 'Slug:') }}
    {{ Form::text('slug', null, array('class' => 'form-control mb-2', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

    {{ Form::label('body', 'Corpo:') }}
    {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

    {{ Form::submit('Crea il post', array('class' => 'btn btn-success mt-2')) }}

    {!! Form::close() !!}

</div>

@endsection

@section('scripts')

{!! Html::script('js/parsley.js') !!}
{!! Html::script('js/dashboard.js') !!}

@endsection
