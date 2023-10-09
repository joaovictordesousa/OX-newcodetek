<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inseminador;
use Illuminate\Http\Request;

class InseminadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AllInseminador = Inseminador::all();
        return view('cadastrarinseminador', [ 'AllInseminador' => $AllInseminador ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastrarinseminador');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inseminador = new Inseminador;
        $inseminador->fill($request->all());
        $inseminador->save();

        return redirect()->route('inseminador.cadastrainseminador')->with('success', 'Inseminador cadastrado com sucesso.');
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
    public function edit(Inseminador $Inseminador)
    {
        return view('editinseminador', [ 'insemi' => $Inseminador ] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $NewInseminador = [
            'name' => $request->input('name')
        ];

        // Atualização de resultado

        Inseminador::where('id', $id)->update($NewInseminador);

        return redirect()->route('inseminador.cadastrainseminador')->with('success', 'Guia de recolhimento alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inseminador $Inseminador)
    {
        $Inseminador->delete();

        return redirect()->route('inseminador.cadastrainseminador')->with('success', 'Registro excluído com sucesso.');
    }
}
