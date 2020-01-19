<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Store;
use App\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    public function index()
    {
        $store = auth()->user()->store;
        return view('admin.stores.index', compact('store'));
    }

    public function create()
    {
        if(auth()->user()->store()->count()){
            flash('Você já possui uma loja')->warning();
            return redirect()->route('admin.stores.index');
        }
        $users = User::all(['id', 'name']);
        return view('admin.stores.create', compact('users'));
    }

    public function store(StoreRequest $request)
    {
       $data = $request->all();

       $user = User::find($data['user']);
       $store = $user->store()->create($data);
       flash('Loja Criada com Sucesso')->success();
       return redirect()->route('admin.stores.index');
    }

    public function edit($store)
    {
        $store = Store::find($store);
        flash('Loja Editada com Sucesso')->success();
        return view ('admin.stores.edit', compact('store'));
    }

    public function update(StoreRequest $request, $store)
    {
        $data = $request->all();

        $store = Store::find($store);
        $store->update($data);

        flash('Loja Atualizada com Sucesso')->success();
        return redirect()->route('admin.stores.index');
    }

    public function destroy($store)
    {
        $store = Store::find($store);
        $store->delete();

        flash('Loja removida com Sucesso')->success();
        return redirect()->route('admin.stores.index');
    }
}
