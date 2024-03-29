@extends('dashboard')

@section('stylesheets')

    {!! Html::style('css/dashboard.css') !!}

@endsection

@section('content')

    <div class="row align-items-center mt-4">

        <div class="col-md-10">
            <h4 style="margin: 0">Tutti i post</h4>
        </div>

        <div class="col-md-2 p-2">
            {!! $posts->links(); !!}
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
                        <th scope="col">Body</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Creato</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ substr(strip_tags($post->body), 0, 100) }}{{ strlen(strip_tags($post->body)) > 100 ? "..." : "" }} </td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ date('j/m/Y', strtotime($post->created_at)) }}</td>
                            <td style="display: inline-flex">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary m-1" alt="view"><i class="far fa-eye"></i></a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success m-1" alt="edit"><i class="fas fa-paragraph"></i></a>
                                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                                <button type="submit" class="btn btn-danger m-1 confirm-box">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/dashboard.js') !!}

@endsection
