<?php

namespace App\Http\Controllers;


use App\Models\cadastroanimais;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Exibir uma listagem do recurso.
     */

     public function index()
     {
        return view('index');
     }

     public function cadastro()
     {

        $registro = cadastroanimais::all();
        return view('cadastro', compact('cadastro'));

     }


    /**
     * Mostre o formulário para criar um novo recurso.
     */
    public function create()
    {
        //
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     */
    public function store(Request $request)
    {
        $registro = new cadastroanimais;
        $registro->fill($request->all());
        $registro->save();

        return redirect()->route('pesquisa')->with('success', 'Guia de recolhimento cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
