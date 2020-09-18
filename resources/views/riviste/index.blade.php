@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

    <div class="row align-items-center mt-4">

        <div class="col-md-10">
            <h4 style="margin: 0">Tutte le riviste</h4>
        </div>

        <div class="col-md-2 p-2">
            {!! $riviste->links(); !!}
        </div>

    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive-md">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">PDF</th>
                        <th scope="col">Data</th>
                        <th scope="col">Azioni</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($riviste as $rivista)
                        <tr>
                            <td>{{ $rivista->name }}</td>
                            <td>
                                <a href="{{ asset('magazine\pdf/' . $rivista->pdf_file) }}" target="_blank">{{ $rivista->pdf_file }}</a>
                            </td>
                            <td>
                                {{ date('F Y', strtotime($rivista->date)) }}
                            </td>
                            <td>
                                {!! Form::open(['route' => ['riviste.destroy', $rivista->id], 'method' => 'delete']) !!}
                                <button type="submit" class="btn btn-danger m-1">
                                    <i class="fas fa-trash-alt"></i>
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
