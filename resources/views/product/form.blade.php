@extends('layout')
@section('title', $product->id ? 'Actualizar Producto' :'Nuevo producto')
@section('header', $product->id ? 'Actualizar Producto' :'Nuevo producto')
@section('content')

<form action="{{ route('product.save') }}" method="POST">  
    @csrf
    @method('post')
    <input type="hidden" name="id" value="{{ $product->id }}">
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="name" value="{{ @old('name') ? @old('name') : $product-> name }}">
        </div>
        @error('name')
            <p class="text-danger">
                {{ $message }}
            </p>
            
        @enderror
    </div>
    <div class="row mb-3">
        <label for="cost" class="col-sm-2 col-form-label">Cost</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="cost" value="{{ @old('cost') ? @old('cost') : $product-> cost}}">
        </div>
        @error('cost')
        <p class="text-danger">
            {{ $message }}
        </p>
        
    @enderror
    </div>
    <div class="row mb-3">
        <label for="price" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="price" value="{{ @old('price') ? @old('price') : $product-> price}}">
        </div>
        @error('price')
        <p class="text-danger">
            {{ $message }}
        </p>
        
    @enderror
    </div>
    <div class="row mb-3">
        <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="quantity" value="{{ @old('quantity') ? @old('quantity') : $product-> quantity}}">
        </div>
        @error('quantity')
        <p class="text-danger">
            {{ $message }}
        </p>
        
    @enderror
    </div>
    <div class="row mb-3">
        <label for="brand" class="col-sm-2 col-form-label">Brand</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="brand" value="{{ @old('brand') ? @old('brand') : $product-> brand }}">
        </div>
        @error('brand')
        <p class="text-danger">
            {{ $message }}
        </p>
        
    @enderror
    </div>
    <div class="row mb-3">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="/products" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    </div>
</form>
    
@endsection
