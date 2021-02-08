@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts del blog <b>{{$blog->name}}</b></div>
                <a href="{{route('index')}}" class="btn btn-info text-white">Volver al listado de blogs</a>
                <a href="{{route('createPost',$blog->id)}}" class="btn btn-success btn-block mt-3">Añadir un nuevo post</a>
                <table class='table'>
                    @if($blog->posts->count())
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Contenido</th>
                        </tr>
                    </thead>
                    @endif
                    <tbody>
                        @forelse($blog->posts as $post)
                        <tr>
                            <td width="70%">{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td><a href="{{route('index')}}" class="btn btn-dark">Ir a la lista de blogs </a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">
                                <p class="alert alert-warning text-center">No hay Posts</p>
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