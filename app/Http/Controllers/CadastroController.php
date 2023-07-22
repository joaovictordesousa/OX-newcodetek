<?php

namespace App\Http\Controllers;


use App\Models\Registro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Exibir uma listagem do recurso.
     */

     public function index()
     {

        $registro = Registro::all();

        // Passe os registros para a view "index.blade.php"
        return view('index', [
            'registro' => $registro
        ]);

     }

     public function cadastro()
     {
        return view('cadastro');

     }


    /**
     * Mostre o formulário para criar um novo recurso.
     */
    public function create()
    {
        
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     */
    public function store(Request $request)
    {
        $registro = $request->validate([
            'nranimal' => 'required|numeric',
            'racaboi' => 'required|string',
            'dtinseminacao' => 'required|date',
            'dtprevista' => 'required|date',
        ]);

        // dd($registro);        
        // Create a new registro instance and fill it with the validated form data

        $registro = new Registro;
        $registro->fill($request->all());
        $registro->save();

        

        return redirect()->route('index')->with('success', 'Cadastrado com sucesso.');

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

    }
}
