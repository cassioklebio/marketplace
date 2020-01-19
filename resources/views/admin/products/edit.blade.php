@extends('layouts.app')
@section('content')
    <hr>
    <h1> Atualização de Produto</h1>
    <hr>
    <form action="{{route('admin.products.update', ['product'=> $product->id])}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Nome Loja </label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " value="{{$product->name}}">
            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid  @enderror" value="{{$product->description}}">
            @error('description')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Conteúdo</label>
            <textarea name="body" id="" cols="100" rows="10" class="form-control @error('body') is-invalid @enderror ">{{$product->body}}</textarea>
            @error('body')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{$product->price}}">
            @error('price')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Slug </label>
            <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
        </div>
        <div>
            <button type="submit" class="btn btn-lg btn-success">Criar Produto</button>
        </div>
    </form>
@endsection
