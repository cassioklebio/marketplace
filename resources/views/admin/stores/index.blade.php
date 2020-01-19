@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <a href="{{route('admin.stores.create')}}" class="btn btn-lg btn-success">Criar Loja</a>
        <hr>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>
                        <div class="btn-group">


                            <div class="3">
                                <a href="{{route('admin.stores.edit', ['store' => $store->id])}}"
                                   class="btn btn-sm btn-info">
                                    Editar
                                </a></div>
                            <div class="3">
                                <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}">
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
        {{$stores->links()}}
    </div>



@endsection
