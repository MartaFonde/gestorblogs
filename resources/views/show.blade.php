@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalle del Blog <b>{{ $blog->name }}</b></div>
                    <a href="{{ route('index') }}" class="btn btn-info text-white">Volver al listado de blogs</a>
                    <a href="{{ route('createPost', $blog->id) }}" class="btn btn-success btn-block mt-3">Añadir
                        un nuevo post</a>
                    <table class='table'>
                        @if ($blog->posts->count())
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Posts</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                        @endif
                        <tbody>
                            @forelse($blog->posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td width="70%">{{ $post->title }}</td>
                                    <td>{{ $blog->posts_count }}</td>
                                    <td><a href="{{ route('showPost', ['id' => $post->id]) }}" class="btn btn-dark">Ir al post </a>     //NOT FOUND
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">
                                        <p class="alert alert-warning text-center">No hay blogs</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
