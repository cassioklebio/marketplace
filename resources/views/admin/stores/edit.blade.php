@extends('layouts.app')
@section('content')
    <div class="container col-md-9">
        <h1> Criar Loja</h1>
        <form action="{{route('admin.stores.update', ['store'=> $store->id])}}" method="post">
            @csrf
            @method("PUT")

            <div class="form-group">

                <label>Nome Loja
                    <input type="text" name="name" class="form-control" value="{{$store->name}}">
                </label>
            </div>
            <div class="form-group">

                <label>Descrição
                    <input type="text" name="description" class="form-control" value="{{$store->description}}">
                </label>
            </div>
            <div class="form-group">
                <label>Telefone
                    <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
                </label>
            </div>
            <div class="form-group">
                <label>Celular/Whatsapp
                    <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
                </label>
            </div>
            <div class="form-group">
                <label>Slug
                    <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
                </label>
            </div>
            <div>
                <button type="submit" class="btn btn-lg btn-success">Atualizar Loja</button>
            </div>


        </form>
    </div>
@endsection
