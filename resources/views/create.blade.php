@extends('layouts.app')
@include("partials.errors");

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear un nuevo blog</div>
                    @include("partials.errors")
                    <div class="card-body">
                        <form method="POST" action="{{ route('store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="name" />
                            </div>
                            <input type="submit" class="btn btn-block btn-dark" value="Crear Blog">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
