@extends('layouts.app')
@section('content')

    <div class="container col-md-9">
        <h1> Criar Loja</h1>
        <hr>
        <form action="{{route('admin.stores.store')}}" method="post">
            @csrf
            <div class="form-group">

                <label>Nome Loja </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                       value="{{old('name')}}">
                 @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>
            <div class="form-group">

                <label>Descrição</label>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                        value="{{old('description')}}">
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
           <div class=" row">
               <div class="form-group col-md">
                   <label>Telefone</label>
                   <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                        value="{{old('phone')}}">
                   @error('phone')
                   <div class="invalid-feedback">
                       {{$message}}
                   </div>
                   @enderror
               </div>
               <div class="form-group col-md">
                   <label>Celular/Whatsapp</label>
                   <input type="text" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @enderror"
                        value="{{old('mobile_phone')}}">
                   @error('mobile_phone')
                   <div class="invalid-feedback">
                       {{$message}}
                   </div>
                   @enderror
               </div>

           </div>
            <div class="row">
                <div class="form-group col-md">
                    <label>Slug </label>
                        <input type="text" name="slug" class="form-control">

                </div>
                <div class="form-group col-md">
                    <label>Usuário</label>
                        <select name="user" class="form-control">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                 </div>

            </div>


            <div>
                <button type="submit" class="btn btn-lg btn-success">Criar Loja</button>
            </div>


        </form>
    </div>

@endsection
