@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

    <div class="mt-4">
        <h4>
            Modifica utente
        </h4>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-8">

            {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'put']) !!}
            {{ Form::label('name', 'Nome:') }}
            {{ Form::text('name', null, ['class' => 'form-control mb-4']) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control mb-4']) }}

            {{ Form::label('roles', 'Ruolo:') }}
            @foreach ($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="roles[]" value="{{ $role->id }}" id="check{{ $role->id }}"
                           @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                    <label class="form-check-label" for="check{{ $role->id }}">
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach

            <div>
                {{ Form::submit('Aggiorna', array('class' => 'btn btn-success mt-4')) }}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/dashboard.js') !!}

@endsection
