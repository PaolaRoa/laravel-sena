@extends('layout')
@section('header')
    Listado de categorias
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{ route('category.form') }}" class="btn btn-primary">Nueva Categoria</a>
        </div>
    </div>
    @if (Session::has('message'))
        <p class="alert alert-success">
            {{ Session::get('message') }}
        </p>
        
    @endif
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->description }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('brand.form', ['id'=>$c->id] )}}">editar</a>
                        <a class="btn btn-danger"" href="{{ route('brand.delete', ['id'=>$c->id]) }}">eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
