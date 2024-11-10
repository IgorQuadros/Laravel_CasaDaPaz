<?php

namespace App\Http\Controllers;

use App\Models\Doacao;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    public function index()
    {
        return Doacao::all();
    }

    public function store(Request $request)
    {
        $doacao = Doacao::create($request->all());
        return response()->json($doacao, 201);
    }

    public function show($id)
    {
        return Doacao::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $doacao = Doacao::findOrFail($id);
        $doacao->update($request->all());
        return response()->json($doacao, 200);
    }

    public function destroy($id)
    {
        Doacao::destroy($id);
        return response()->json(null, 204);
    }
}
