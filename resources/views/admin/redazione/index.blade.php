@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

    <div class="row align-items-center mt-4">

        <div class="col-md-9">
            <h4 style="margin: 0">Tutta la redazione</h4>
        </div>

        <div class="col-md-3 p-2" style="text-align: right">
            <a href="{{ route('admin.redazione.create') }}" class="btn btn-secondary m-1" alt="view">Aggiungi membro redazione</a>
        </div>

    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive-md">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Azioni</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($redazione as $single)
                        <tr>
                            <td>{{ $single->name }}</td>
                            <td style="display: inline-flex">
                                <a href="{{ route('pages.redazione', $single->id) }}" class="btn btn-primary m-1" alt="view">Visualizza</a>
                                <a href="{{ route('admin.redazione.edit', $single->id) }}" class="btn btn-success m-1" alt="edit">Modifica</a>
                                {!! Form::open(['route' => ['admin.redazione.destroy', $single->id], 'method' => 'delete']) !!}
                                <button type="submit" class="btn btn-danger m-1 confirm-box">
                                    Rimuovi
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/dashboard.js') !!}

@endsection
