@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Cadastrar Produto</a>
        <hr>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome do Produto</th>
                <th>Preço</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{number_format($product->price,2,'.',',')}}</td>
                    <td>{{$product->store->name}}</td>
                    <td>
                        <div class="btn-group">
                           <div class="3">
                               <a href="{{route('admin.products.edit', ['product' => $product->id])}}"
                                  class="btn btn-sm btn-primary">EDITAR</a>
                            </div>
                            <div class="3">
                                <form action="{{route('admin.products.destroy', ['product' => $product->id])}}"
                                      method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-sm btn-danger">REMOVER</button>
                                </form>
                            </div>

                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>



@endsection
