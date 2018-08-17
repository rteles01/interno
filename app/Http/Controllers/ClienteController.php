<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index()
    {
        return Cliente::all();
    }

    public function show($id)
    {
        return Cliente::find($id);
    }

    public function store(Request $request)
    {
        return Cliente::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Cliente::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Cliente::findOrFail($id);
        $article->delete();

        return 204;
    }
}
