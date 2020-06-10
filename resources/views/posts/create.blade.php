@extends('main')

@section('title', 'Dashboard - Nuovo Post')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>
                Create New Post
            </h1>

            <hr>

            {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
                {{ Form::label('title', 'Title:') }}
                <!-- null è il default value -->
                {{ Form::text('title', null, array('class' => 'form-control mb-2', 'required' => '', 'maxlength' => '255')) }}

                {{ Form::label('body', 'Post body:') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

                {{ Form::submit('Create Post', array('class' => 'btn btn-success mt-2')) }}

            {!! Form::close() !!}


        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.js') !!}

@endsection
