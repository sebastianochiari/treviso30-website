@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

    <div class="mt-4">
        <h4>
            Tutti gli utenti
        </h4>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ruoli</th>
                    <th scope="col">Azioni</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                        <td style="display: inline-flex;">
                            @if($user->id != Auth::id())
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success m-1" alt="edit">Modifica</a>
                            {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger m-1">
                                Elimina
                            </button>
                            {!! Form::close() !!}
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/dashboard.js') !!}

@endsection
