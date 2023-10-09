<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Racadotouro;
use Illuminate\Http\Request;

class TouroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AllTouro = Racadotouro::all();
        return view('cadastratouro', [ 'AllTouro' => $AllTouro ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastratouro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $touros = new Racadotouro;
        $touros->fill($request->all());
        $touros->save();

        return redirect()->route('touro.cadastratouro')->with('success', 'Touro cadastrado com sucesso.');
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
    public function edit(Racadotouro $Racadotouro)
    {
        return view('edittouro', [ 'touro' => $Racadotouro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $NewTouro = [
            'bull_tag' => $request->input('bull_tag')
        ];

        Racadotouro::where('id', $id)->update($NewTouro);

        return redirect()->route('touro.cadastratouro')->with('success', 'Guia de recolhimento alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Racadotouro $Racadotouro)
    {
        $Racadotouro->delete();

        return redirect()->route('touro.cadastratouro')->with('success', 'Registro excluído com sucesso.');
    }
}
