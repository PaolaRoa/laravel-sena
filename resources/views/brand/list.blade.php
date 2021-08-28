@extends('layout')
@section('header')
    Listado de marcas
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{ route('brand.form') }}" class="btn btn-primary">Nueva Marca</a>
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
            @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->name }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('brand.form', ['id'=>$brand->id] )}}">editar</a>
                        <a class="btn btn-danger"" href="{{ route('brand.delete', ['id'=>$brand->id]) }}">eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
