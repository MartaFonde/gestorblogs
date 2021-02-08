@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear un nuevo post</div>
                @include("partials.errors")
                <div class="card-body">
                    <form method="POST" action="{{route('storePost',$id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" name="title" />
                            <label for="content">Contenido</label>
                            <input type="text" class="form-control" name="content" />
                        </div>
                        <input type="submit" class="btn btn-block btn-dark" value="Crear Post">
                    </form>
                    <br>
                    <a href="{{route('index')}}" class="btn btn-success btn-block mt-8">Volver al listado de blogs</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection